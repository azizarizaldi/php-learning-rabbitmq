<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class PdfDownloadClient
{
    private $connection;
    private $channel;
    private $callback_queue;
    private $response;
    private $corr_id;

    public function __construct()
    {
        $this->connection = new AMQPStreamConnection(
            'localhost',
            5672,
            'guest',
            'guest'
        );
        $this->channel = $this->connection->channel();
        list($this->callback_queue, ,) = $this->channel->queue_declare(
            "sms",
            true,
            false,
            false,
            false
        );
        $this->channel->basic_consume(
            $this->callback_queue,
            '',
            false,
            true,
            false,
            false,
            array(
                $this,
                'onResponse'
            )
        );
    }

    public function onResponse($rep)
    {
        if ($rep->get('correlation_id') == $this->corr_id) {
            $this->response = $rep->getBody();
        }
    }

    public function send_request()
    {        
        $name       = isset($_POST['name']) ? $_POST['name'] : 'XX';

        $this->response = null;
        $this->corr_id  = uniqid();

        $msg = new AMQPMessage(
            $name,
            array(
                'correlation_id' => $this->corr_id,
                'reply_to' => $this->callback_queue
            )
        );

        $this->channel->basic_publish($msg, '', 'sms');
        while (!$this->response) {
            $this->channel->wait();
        }

        return $this->response;
    }
}

$fibonacci_rpc  = new PdfDownloadClient();
$response       = $fibonacci_rpc->send_request();
echo $response;
?>
<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('sms', true, false, false, false);

echo " [x] Awaiting RPC requests\n";
$callback = function ($req) {
    echo ' [✔] Received '.$req->getBody() . PHP_EOL;

    $generate_response = generatePDF($req->getBody());
    
    $msg = new AMQPMessage(
        $generate_response,
        array('correlation_id' => $req->get('correlation_id'))
    );

    $req->getChannel()->basic_publish(
        $msg,
        '',
        $req->get('reply_to')
    );
    $req->ack();
};

$channel->basic_qos(null, 1, false);
$channel->basic_consume('sms', 'rpc-sms-consumer', true, false, false, false, $callback);

try {
    $channel->consume();
} catch (\Throwable $exception) {
    echo $exception->getMessage();
}

$channel->close();
$connection->close();

function generatePDF($params="") {
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->showImageErrors = true;

    // Set PDF content and return as string
    $mpdf->WriteHTML('
    <!DOCTYPE html>
    <html lang="id">

    <body>
        <h3 style="text-align:center">'.$params.'</h3>
    </body>

    </html>
    ');
    
    return $mpdf->Output('', 'S');
}
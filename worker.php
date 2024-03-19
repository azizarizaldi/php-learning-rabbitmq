<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Connection\AMQPStreamConnection;

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest', '/');
    $channel    = $connection->channel();

    echo ' [*] Waiting for messages. To exit press CTRL+C', PHP_EOL;

    $channel->basic_consume("all_notification","email-consumer", false, true, false, false, function (AMQPMessage $message){
        echo ' [✔] Received '.$message->getBody() . PHP_EOL;

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1 style="text-align:center">Hai '.$_GET['name'].'!</h1>');
        $mpdf->Output();    
    });

    $channel->consume();

} catch (\Throwable $exception) {
    echo $exception->getMessage();
}

$channel->close();
$connection->close();

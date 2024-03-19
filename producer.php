<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Wire\AMQPTable;

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest', '/');
    $channel    = $connection->channel();

    for ($i=1; $i <= 10; $i++) { 
        $headers = new AMQPTable();
        $headers->set("sample","value");
        $headers->set("type","report");
        $headers->set("format","excel");

        $message = new AMQPMessage("Email With Headers $i");
        $channel->basic_publish($message, "notification", "email");
    }

    $channel->close();
    $connection->close();

} catch (\Throwable $exception) {
    echo $exception->getMessage();
}
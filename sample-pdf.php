<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Wire\AMQPTable;

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest', '/');
    $channel    = $connection->channel();

    $channel->queue_declare('email', true, true, false, false);

    $headers = new AMQPTable();
    $headers->set("sample","value");
    $headers->set("type","report");
    $headers->set("format","excel");

    $message = new AMQPMessage("Mengirim file dengan nama ".$_GET['name']);
    $channel->basic_publish($message, "notification", "email");

    $channel->close();
    $connection->close();
    
} catch (\Throwable $exception) {
    echo $exception->getMessage();
}


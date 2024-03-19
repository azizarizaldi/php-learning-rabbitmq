<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Connection\AMQPStreamConnection;

try {
    $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest', '/');
    $channel    = $connection->channel();
    $callback   = function ($msg) {
        echo ' [✔] Received ', $msg->body, PHP_EOL;
    };

    $channel->basic_consume("all_notification","email-consumer", false, true, false, false, $callback);
    $channel->consume();
    $channel->close();
    $connection->close();

} catch (\Throwable $exception) {
    echo $exception->getMessage();
}
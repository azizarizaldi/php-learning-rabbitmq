<?php

require_once __DIR__ . '/vendor/autoload.php'; // Sesuaikan path sesuai dengan struktur proyek Anda

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
use PhpAmqpLib\Wire\AMQPTable;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$queueName = 'email'; // Ganti 'nama_antrian' dengan nama antrian yang ingin Anda buat
$queueOptions = [
    'x-queue-type' => 'quorum', // Sesuaikan dengan jenis antrian yang Anda inginkan
];

$channel->queue_declare($queueName, false, true, false, false, false, new AMQPTable($queueOptions));

$queueInfo = $channel->queue_declare($queueName, true);
$messageCount = $queueInfo[1];

echo "Jumlah pesan dalam antrian '$queueName' adalah: $messageCount";

$channel->close();
$connection->close();

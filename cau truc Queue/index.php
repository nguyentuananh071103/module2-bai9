<?php
include_once "Node.php";
include_once "Queue.php";

$queue = new Queue();
$queue->enQueue('start');
$queue->enQueue(1);
$queue->enQueue(2);
$queue->enQueue(3);
$queue->enQueue(4);
$queue->enQueue('end');
echo "<pre>";
while (!$queue->isEmpty()){
    echo $queue->deQueue()."\n";
}
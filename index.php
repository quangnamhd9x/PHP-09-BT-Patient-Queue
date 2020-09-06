<?php
include_once 'Patient.php';
include_once 'Queue.php';

$queue = new Queue();
$queue->addPatient("Nam", 1);
$queue->addPatient("son", 2);
$queue->addPatient("thang", 3);
$queue->addPatient("lien", 4);
$queue->sort();
print_r($queue->dequeue());

echo "<pre>";
print_r($queue->toString());
echo "</pre>";
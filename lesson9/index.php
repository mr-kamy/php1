<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$sql = 'SELECT * FROM trainSchedule';
var_dump($db->query($sql));
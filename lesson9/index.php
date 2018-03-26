<?php

require __DIR__ . '/App/Db.php';

$db = new \App\Db();
$sql = 'SELECT * FROM trainSchedule';
var_dump($db->query($sql));
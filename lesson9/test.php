<?php

require __DIR__ . '/autoload.php';

$path = __DIR__ . '/data/homeRecord.php';

$record = new \App\HomeRecord();
$record->getHomeRecord($path);
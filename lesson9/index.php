<?php

require __DIR__ . '/autoload.php';

$path = __DIR__ . '/data/homeRecord.php';
$homeRecord = new \App\HomeRecord($path);
$record = $homeRecord->getHomeRecord($path);

$view = new \App\View();
$view->assign('record', $record[0]);
$template = __DIR__ . '/templates/index.php';
$view->display($template);
<?php

require __DIR__ . '/autoload.php';

$homeRecord = new \App\HomeRecord();
$path = __DIR__ . '/data/homeRecord.php';
$record = $homeRecord->getHomeRecord($path);

$view = new \App\View();
$view->assign('record', $record);
$template = __DIR__ . '/templates/index.php';
$view->display($template);
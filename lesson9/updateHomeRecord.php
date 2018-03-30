<?php

require __DIR__ . '/autoload.php';

if ((isset($_POST['record'])) && ('' != $_POST['record'])) {
    $path = __DIR__ . '/data/homeRecord.php';
    $homeRecord = new \App\HomeRecord($path);
    $record = $homeRecord->updateHomeRecord($_POST['record']);
    header('Location: /admin.php');
    exit;

} else {
    header('Location: /admin.php');
    exit;
}
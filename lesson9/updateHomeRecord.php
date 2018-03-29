<?php

require __DIR__ . '/autoload.php';

if ((isset($_POST['record'])) && ('' != $_POST['record'])){
    $path = __DIR__ . '/data/homeRecord.php';
    $homeRecord = new \App\HomeRecord($path);
    $record = $homeRecord->updateHomeRecord($_POST['record']);
    header('Location: /lesson9/admin.php');
    exit;

} else {
    header('Location: /lesson9/admin.php');
    exit;
}
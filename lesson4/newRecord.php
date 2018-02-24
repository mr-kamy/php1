<?php
include __DIR__ . '/functions.php';

$path = __DIR__ . '/data/guestbook.txt';
$record = $_POST['text'];

if (file_exists($path)) {
    if ((isset($record)) && (!empty($record))) {
        $data = readGuestBook();
        $data[] = $record;
        $string = implode("\n", $data);
        file_put_contents($path, $string);
    }
}

header('Location: /guestbook.php');

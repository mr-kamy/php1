<?php
session_start();
include __DIR__ . '/functions.php';

$name = getCurrentUser();
$data = date('c ');
$myimg = $_FILES['myimg'];
$pathLog = __DIR__ . '/data/log.txt';
$textLog = $name . ': ' . $data . '- ' . $myimg['name'] . "\n";
$dir = __DIR__ . '/img';
$path = $dir . '/' . $myimg['name'];
$files = scandir($dir);
if (isset($myimg)) {
    if (0 == $myimg['error']) {
        if (('image/jpeg' == $myimg['type']) || ('image/png' == $myimg['type'])) {
            if (!in_array($myimg['name'], $files)) {
                $res = move_uploaded_file($myimg['tmp_name'], $path);
                file_put_contents($pathLog, $textLog, FILE_APPEND);
            }
        }
    }
}

header('Location: /');

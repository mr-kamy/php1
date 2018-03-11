<?php
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/classes/Logger.php';

$pathImg = __DIR__ . '/img';
$upload = new Uploader('myimg', $pathImg);
$name = $upload->getName();

$log = __DIR__ . '/data/log.txt';
$logger = new Logger($log);

if ($upload->isUploaded()) {
    $logger->append($name);
    $logger->save();
    $upload->upload();
}

header('Location: /');
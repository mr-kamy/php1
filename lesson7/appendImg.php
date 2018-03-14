<?php
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/classes/Logger.php';

$pathImg = __DIR__ . '/img';
$upload = new Uploader('myimg', $pathImg);
$name = $upload->getName();
$file = $_FILES['myimg'];

//$log = __DIR__ . '/data/log.txt';
//$logger = new Logger($log);

if ($upload->isUploaded()) {
    if (('image/jpeg' == $file['type']) || ('image/png' == $file['type'])) {
        //$logger->append($name);
        //$logger->save();
        $upload->upload();
    }
}

header('Location: /gallery.php');
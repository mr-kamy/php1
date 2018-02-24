<?php

$myimg = $_FILES['myimg'];
$dir = __DIR__ . '/img';
$path = $dir . '/' . $myimg['name'];
$files = scandir($dir);
if (isset($myimg)) {
    if (0 == $myimg['error']) {
        if (('image/jpeg' == $myimg['type']) || ('image/png' == $myimg['type'])) {
            if (!in_array($myimg['name'], $files)) {
                $res = move_uploaded_file($myimg['tmp_name'], $path);
            }
        }
    }
}

header('Location: /gallery.php');

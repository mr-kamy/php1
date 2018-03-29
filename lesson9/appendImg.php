<?php
require __DIR__ . '/autoload.php';

$pathImg = __DIR__ . '/data/img';
$upload = new \App\Uploader('myimg', $pathImg);
$name = $upload->getName();
$file = $_FILES['myimg'];

if(isset($_POST['descr'])){
    $descr = $_POST['descr'];
} else {
    $descr = '';
}

if ($upload->isUploaded()) {
    if (('image/jpeg' == $file['type']) || ('image/png' == $file['type'])) {
        $gallery = new \App\Models\Gallery();
        $gallery->appendImg($file['name'], $descr);
        $upload->upload();
    }
}

header('Location: /lesson9/admin.php');
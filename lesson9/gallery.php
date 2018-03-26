<?php

require __DIR__ . '/autoload.php';

$gallery = new \App\Models\Gallery();
$images = $gallery->getImages();

$view = new \App\View();
$template = __DIR__ . '/templates/gallery.php';
$view->assign('images', $images);
$path = '/lesson9/data/img/';
$view->assign('path', $path);
$view->display($template);

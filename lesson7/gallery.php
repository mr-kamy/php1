<?php
session_start();
require_once __DIR__ . '/classes/Gallery.php';
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/functions.php';

$view = new View();

if (null != getCurrentUser()) {
    $user = getCurrentUser();
    $view->assign('user', $user);

}

$path = __DIR__ . '/img';
$gallery = new Gallery($path);
$view->assign('gallery', $gallery);
$template = __DIR__ . '/templates/gallery.php';
$view->display($template);

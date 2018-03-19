<?php
require_once __DIR__ . '/classes/View.php';

$pathImg = __DIR__ . '/img/';
$files = scandir($pathImg);
if (isset($_GET['id'])) {
    $img = $_GET['id'];
    $template = __DIR__ . '/templates/image.php';
    $view = new View();
    $view->assign('img', $img);
    $view->assign('files', $files);
    $view->display($template);
} else {
    header('Location: /gallery.php');
    exit;
}

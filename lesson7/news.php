<?php
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';

$path = __DIR__ . '/data/news.txt';
$news = new News($path);

$template = __DIR__ . '/templates/news.php';

$view = new View();
$view->assign('news', $news);
$view->display($template);

<?php
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';

$path = __DIR__ . '/data/news.txt';
$news = new News($path);
if ((isset($_GET['id'])) && (isset($news->getNews()[$_GET['id']]))) {
    $article = $news->getNews()[$_GET['id']];
} else {
    header('Location: /news.php');
}

$view = new View();
$view->assign('article', $article);
$template = __DIR__ . '/templates/article.php';
$view->display($template);

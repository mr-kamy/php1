<?php
require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/View.php';

$db = new DB();
$sql = 'SELECT * FROM news ORDER BY id DESC limit 3';
$news = $db->query($sql);

$template = __DIR__ . '/templates/news.php';
$view = new View();
$view->assign('news', $news);
$view->display($template);
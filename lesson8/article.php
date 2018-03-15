<?php
require_once __DIR__ . '/classes/DB.php';
require_once __DIR__ . '/classes/View.php';

$db = new DB();

$data['id'] = $_GET['id'];
$sql = 'SELECT * FROM news WHERE id=:id';
$article = $db->query($sql, $data);
if (false != $article) {
    $view = new View();
    $view->assign('article', $article[0]);
    $template = __DIR__ . '/templates/article.php';
    $view->display($template);
} else {
    header('Location: /news.php');
}
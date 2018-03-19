<?php
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';

$path = __DIR__ . '/data/news.txt';
$news = new News($path);
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (false != ($news->getById($id))) {
        $article = $news->getById($id);
        $view = new View();
        $view->assign('article', $article);
        $template = __DIR__ . '/templates/article.php';
        $view->display($template);
        exit;
    }
}
header('Location: /news.php');
exit();

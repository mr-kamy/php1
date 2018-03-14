<?php
require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/View.php';

$path = __DIR__ . '/data/guestbook.txt';
$guestBook = new GuestBook($path);

$template = __DIR__ . '/templates/index.php';

$view = new View();
$view->assign('guestBook', $guestBook);
$view->display($template);

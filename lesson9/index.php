<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();
$template = __DIR__ . '/templates/index.php';
$view->display($template);
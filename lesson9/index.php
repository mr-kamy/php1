<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$sql = 'SELECT * FROM trainSchedule';
$schedule = $db->query($sql);

$view = new \App\View();
$view->assign('schedule', $schedule);
$template = __DIR__ . '/templates/index.php';
$view->display($template);
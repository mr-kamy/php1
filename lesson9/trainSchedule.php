<?php

require __DIR__ . '/autoload.php';

$trainSchedule = new \App\Models\TrainSchedule();
$schedule = $trainSchedule->getAll();

$view = new \App\View();
$view->assign('schedule', $schedule);
$template = __DIR__ . '/templates/trainSchedule.php';
$view->display($template);
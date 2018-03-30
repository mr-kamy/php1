<?php

require __DIR__ . '/autoload.php';

if ((isset($_POST)) && (!empty($_POST))) {
    $trainRecord = new \App\Models\TrainRecord('', $_POST['train'], $_POST['arrival'], $_POST['departure'], $_POST['appointment']);
    $schedule = new \App\Models\TrainSchedule();
    $schedule->append($trainRecord);
}

header('Location: /admin.php');



<?php

require __DIR__ . '/autoload.php';

if ((isset($_POST)) && (!empty($_POST))) {
    $schedule = new \App\Models\TrainSchedule();
    $record = new \App\Models\TrainRecord($_POST['id'], $_POST['train'], $_POST['arrival'], $_POST['departure'], $_POST['appointment']);
    $schedule->update($record);
}

header('Location: /lesson9/admin.php');

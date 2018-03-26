<?php

namespace App\Models;


use App\Db;

class TrainSchedule
{
    public function getAll()
    {
        $data = [];
        $db = new Db();
        $sql = 'SELECT * FROM trainSchedule';
        $res = $db->query($sql);
        foreach ($res as $line){
            $data[] = new TrainRecord($line->id, $line->train, $line->arrival, $line->departure, $line->appointment);
        }
        return $data;
    }

    public function getOneRecord($id)
    {

    }

}
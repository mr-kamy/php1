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

    public function getById(int $id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM trainSchedule WHERE id=:id';
        $res = $db->query($sql, [':id' => $id]);
        $data = new TrainRecord($res[0]->id, $res[0]->train, $res[0]->arrival, $res[0]->departure, $res[0]->appointment);
        return $data;
    }

    public function append(TrainRecord $record)
    {
        $db = new Db();
        $sql = 'INSERT INTO trainSchedule (train, arrival, departure, appointment) 
VALUES (:train, :arrival, :departure, :appointment)';
        $data = [
            ':train' => $record->train,
            ':arrival' => $record->arrival,
            ':departure' => $record->departure,
            ':appointment' => $record->appointment,
        ];
        $db->execute($sql, $data);
    }

    public function update(TrainRecord $record)
    {
        $db = new Db();
        $sql = 'UPDATE trainSchedule SET train=:train, arrival=:arrival, departure=:departure, appointment=:appointment WHERE id=:id';
        $data = [
            ':id' => $record->id,
            ':train' => $record->train,
            ':arrival' => $record->arrival,
            ':departure' => $record->departure,
            ':appointment' => $record->appointment,
        ];
        $db->execute($sql, $data);
    }

}
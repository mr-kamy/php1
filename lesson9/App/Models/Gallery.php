<?php

namespace App\Models;


use App\Db;

class Gallery
{
    public function getImages()
    {
        $data = [];
        $db = new Db();
        $sql = 'SELECT * FROM gallery';
        $res = $db->query($sql);
        foreach ($res as $line){
            $data[] = new Image($line->id, $line->name, $line->description);
        }
        return $data;
    }

}
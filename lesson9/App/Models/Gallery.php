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
        foreach ($res as $line) {
            $data[] = new Image($line->id, $line->name, $line->description);
        }
        return $data;
    }

    public function appendImg(string $name, string $descr)
    {
        $db = new Db();
        $sql = 'INSERT INTO gallery (name, description) VALUES (:name, :descr)';
        $data = [':name' => $name, ':descr' => $descr];
        $db->execute($sql, $data);
    }

}
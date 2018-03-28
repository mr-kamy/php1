<?php

namespace App;


class HomeRecord
{

    public function getHomeRecord($path)
    {
        $this->path = $path;
        $record = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return $record[0];
    }

}
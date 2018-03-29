<?php

namespace App;


class HomeRecord
{
    protected $data;
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    public function getHomeRecord()
    {
        return $this->data;
    }

    public function updateHomeRecord($data)
    {
        file_put_contents($this->path, $data);
    }

}
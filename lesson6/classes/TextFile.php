<?php

class TextFile
{
    protected $data;
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
        if (file_exists($path)) {
            $this->data = file($path, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
        } else {
            $this->data = [];
        }
    }

    public function getData()
    {
        return $this->data;
    }

    public function save()
    {
        $string = implode("\n", $this->data);
        $res = file_put_contents($this->path, $string);
        return $res;
    }
}
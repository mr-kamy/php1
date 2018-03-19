<?php
require_once __DIR__ . '/../functions.php';

class Logger
{
    protected $data;
    protected $path;

    public function __construct(string $path)
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

    public function append($title)
    {

        $name = getCurrentUser();
        $date = date('c');
        $textLog = $name . ': ' . $date . '- ' . $title . "\n";
        $this->data[] = $textLog;

    }

}

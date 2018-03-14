<?php
require_once __DIR__ . '/Article.php';

class News
{
    protected $path;
    protected $data = [];

    public function __construct(string $path)
    {
        $this->path = $path;
        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $this->data[] = new Article($line);
        }
    }

    public function getNews()
    {
        return $this->data;
    }

}
<?php
require_once __DIR__ . '/Image.php';
require_once __DIR__ . '/Uploader.php';

class Gallery
{
    protected $data = [];
    protected $path;

    public function __construct(string $path)
    {
        $this->path = $path;
        $files = scandir($this->path);
        foreach ($files as $file) {
            if (('.' == $file) || ('..' == $file)) {
                continue;
            } else {
                $this->data[] = new Image($file);
            }
        }
    }

    public function getFiles()
    {
        return $this->data;
    }

}
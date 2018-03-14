<?php

class Uploader
{
    protected $file;
    protected $path;

    public function __construct($name, $path)
    {
        $this->path = $path;
        if (isset($_FILES[$name])) {
            $this->file = $_FILES[$name];
        } else {
            $this->file = [];
        }
    }

    public function isUploaded()
    {
        if (!empty($this->file)) {
            if (0 == $this->file['error']) {
                return true;
            }
        }
        return false;
    }

    public function upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file($this->file['tmp_name'], $this->path . '/' . $this->file['name']);
        }
    }

    public function getName()
    {
        return $this->file['name'];
    }

}
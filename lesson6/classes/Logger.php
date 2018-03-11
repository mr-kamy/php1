<?php
session_start();
require_once __DIR__ . '/TextFile.php';
require_once __DIR__ . '/../functions.php';

class Logger extends TextFile
{
    public function append($title)
    {
        $name = getCurrentUser();
        $date = date('c');
        $textLog = $name . ': ' . $date . '- ' . $title . "\n";
        $this->data[] = $textLog;
    }

}
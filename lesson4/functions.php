<?php

function readGuestBook()
{
    $res = __DIR__ . '/data/guestbook.txt';
    if (file_exists($res)) {
        $records = file($res, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return $records;
    } else {
        return false;
    }
}

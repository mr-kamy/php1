<?php
require_once __DIR__ . '/classes/GuestBook.php';

$path = __DIR__ . '/data/guestbook.txt';
$guestBook = new GuestBook($path);

if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $guestBook->append($text);
    $guestBook->save();
}

header('Location: /guestBook.php');
<?php

require_once __DIR__ . '/classes/GuestBook.php';
require_once __DIR__ . '/classes/GuestBookRecord.php';

$path = __DIR__ . '/data/guestbook.txt';
$guestBook = new GuestBook($path);

$message = $_POST['message'];
$record = new GuestBookRecord($message);

$guestBook->append($record)->save();

header('Location: /');
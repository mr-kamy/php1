<?php
session_start();
require_once __DIR__ . '/functions.php';

if (null != getCurrentUser()) {
    header('Location: /gallery.php');
    exit;
} else { ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <a href="/">На главную</a>
    <form action="/autorization.php" method="post">
        <input type="text" name="login">
        <input type="password" name="password">
        <button type="submit">Войти</button>
    </form>
    </body>
    </html>
    <?php
}

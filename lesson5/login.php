<?php
session_start();
include __DIR__ . '/functions.php';
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    if (existsUser($name)) {
        header('Location: /');
    }
} else { ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
    </head>
    <body>
    <a href="/">На главную</a>
    <form action="/autorization.php" method="post">
        <input type="text" name="login" required>
        <input type="password" name="password" required>
        <button type="submit">Войти</button>
    </form>
    </body>
    </html>

<?php } ?>

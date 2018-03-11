<?php
session_start();
require_once __DIR__ . '/functions.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (existsUser($login)) {
        if (checkPassword($login, $password)) {
            $_SESSION['name'] = $login;
            header('Location: /');
        }
    }
}

header('Location: /login.php');

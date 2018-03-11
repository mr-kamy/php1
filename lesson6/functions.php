<?php

function getUsersList()
{
    $path = __DIR__ . '/data/users.php';
    if (file_exists($path)) {
        return include $path;
    } else {
        return false;
    }
}

function existsUser($login)
{
    $users = getUsersList();
    if (isset($users[$login])) {
        return true;
    } else {
        return false;
    }
}

function checkPassword($login, $password)
{
    $users = getUsersList();
    if (existsUser($login)) {
        if (password_verify($password, $users[$login])) {
            return true;
        } else {
            return false;
        }
    }

}

function getCurrentUser()
{
    if ($_SESSION['name']) {
        $name = $_SESSION['name'];
        return $name;
    } else {
        return null;
    }
}

assert(existsUser('Иван') == true);
assert(existsUser('Василий') == true);
assert(existsUser('Петр') == true);
assert(existsUser('Мария') == true);
assert(existsUser('Владимир') == false);
assert(existsUser('Софья') == false);

assert(checkPassword('Иван', '1234') == true);
assert(checkPassword('Иван', '1235') == false);
assert(checkPassword('Софья', '89gds') == false);
<?php

function getUsersList()
{
    $path = __DIR__ . '/data/users.php';
    if (file_exists($path)) {
        $users = include $path;
        return $users;
    } else {
        return false;
    }
}

function existsUser($login)
{
    $users = getUsersList();
    $res = array_key_exists($login, $users);
    return $res;
}

function checkPassword($login, $password)
{
    $users = getUsersList();
    $res = password_verify($password, $users[$login]);
    return $res;
}

;

function getCurrentUser()
{
    if (isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
        return $name;
    } else {
        return null;
    }

}


assert(existsUser('Иван') == true);
assert(existsUser('Мария') == true);
assert(existsUser('Дмитрий') == false);

assert(checkPassword('Иван', '1234') == true);
assert(checkPassword('Василий', '5369') == false);

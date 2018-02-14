<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Дискриминант</title>
</head>
<body>

<?php
$t = include __DIR__ . '/functions.php';
var_dump($t);
$a = 6;
$b = 15;
$c = 2;
$d = discriminant($a, $b, $c);
if ($d < 0) {
    echo 'Вещественных корней нет.';
} elseif ($d == 0) {
    $x = (-$b + (sqrt($d))) / (2 * $a);
    echo 'уравнение имеет один корень x = ' . $x;
} else {
    $x1 = (-$b - (sqrt($d))) / (2 * $a);
    $x2 = (-$b + (sqrt($d))) / (2 * $a);
    echo 'уравнение имеет два корня x1 = ' . $x1 . '; x2 = ' . $x2;
}
?>

</body>
</html>

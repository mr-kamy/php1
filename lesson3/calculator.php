<?php

include __DIR__ . '/functions.php';

$a = $_GET['a'] ?? 0;
$b = $_GET['b'] ?? 0;
$op = $_GET['op'];
$operator = ['+', '-', '*', '/'];

if ((0 == $b) && ($op == '/')) {
    $x = 'Делить на \'0\' нельзя!';
} elseif ((!is_numeric($a)) || (!is_numeric($b))) {
    $x = 'Введите в поля числа!';
} elseif (!in_array($op, $operator)) {
    $x = 'Неизвестная операция!';
} else {
    $x = calc($a, $b, $op);
}
?>

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
<form action="/calculator.php">
    <input type="text" name="a" placeholder="<?php echo $a; ?>">
    <select name="op">

        <?php
        foreach ($operator as $value):?>
            <option <?php if ($value == $op){ ?>selected<?php } ?>><?php echo $value; ?></option>
        <?php endforeach; ?>

    </select>
    <input type="text" name="b" placeholder="<?php echo $b; ?>">
    <button type="submit">=</button>
</form>

<?php echo $x; ?>

</body>
</html>

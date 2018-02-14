<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблицы истинности</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid gray;
        }
    </style>
</head>
<body>
<table>
    <caption>Конъюнкция</caption>
    <tr>
        <td>a</td>
        <td>b</td>
        <td>a && b</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?php echo (int)(0 && 0); ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo (int)(1 && 0); ?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo (int)(0 && 1); ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo (int)(1 && 1); ?></td>
    </tr>
</table>
<table>
    <caption>Дизъюнкция</caption>
    <tr>
        <td>a</td>
        <td>b</td>
        <td>a || b</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?php echo (int)(0 || 0); ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo (int)(1 || 0); ?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo (int)(0 || 1); ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo (int)(1 || 1); ?></td>
    </tr>
</table>
<table>
    <caption>Сложение по модулю 2</caption>
    <tr>
        <td>a</td>
        <td>b</td>
        <td>a xor b</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td><?php echo (int)(0 xor 0); ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td><?php echo (int)(1 xor 0); ?></td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td><?php echo (int)(0 xor 1); ?></td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td><?php echo (int)(1 xor 1); ?></td>
    </tr>
</table>

</body>
</html>

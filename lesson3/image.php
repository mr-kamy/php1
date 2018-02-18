<?php
$img = include __DIR__ . '/data.php';
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
<a href="/gallery.php">На главную</a>
<?php
if (!array_key_exists($_GET['id'], $img)){
    ?>
    <p>Изображение не найдено!</p>
    <?php
} else { ?>
<img src="/img/<?php echo $img[$_GET['id']]; ?>" width="600">
</body>
</html>
<?php } ?>

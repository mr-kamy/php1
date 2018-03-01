<?php
$dir = __DIR__ . '/img';
$files = scandir($dir);
if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
    $image = $_GET['id'];
} else {
    header('Location: /gallery.php');
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
<a href="/">На главную</a>
<?php if (in_array($image, $files)): ?>
    <img src="/img/<?php echo $image; ?>" width="600">
<?php else: ?>
    <p>Изображение не найдено</p>
<?php endif; ?>
</body>
</html>

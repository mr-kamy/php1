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
<a href="/">Гостевая книга</a><br>
<a href="/gallery.php">Галерея</a><br>
<a href="/news.php">Новости</a><br>
<?php if (in_array($img, $files)): ?>
    <img src="/img/<?php echo $img; ?>" width="1000">
<?php else : ?>
    <p>Изображение не найдено!</p>
<?php endif; ?>
</body>
</html>
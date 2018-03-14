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

<a href="/">Гостевая книга</a>
<a href="/news.php">Новости</a>

<?php if (null != $user): ?>
    <p>Привет, <?php echo $user; ?>!</p>
    <a href="/logout.php">Выйти</a>
    <form action="/appendImg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <button type="submit">Отправить</button>
    </form>
<?php else: ?>
    <p><a href="/login.php">Войти</a></p>
<?php endif; ?>

<?php foreach ($gallery->getFiles() as $file): ?>
    <a href="/image.php?id=<?php echo $file->getFile(); ?>"><img src="/img/<?php echo $file->getFile(); ?>" width="300"></a>
<?php endforeach; ?>

<form action="/appendImg.php" method="post" enctype="multipart/form-data">
    <input type="file" name="myimg">
    <button type="submit">Отправить</button>
</form>

</body>
</html>
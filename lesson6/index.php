<?php
session_start();
require_once __DIR__ . '/functions.php';

if (null != getCurrentUser()) {
    $name = getCurrentUser();
}

$pathImg = __DIR__ . '/img/';
$images = [];
$files = scandir($pathImg);
foreach ($files as $file) {
    if (('.' == $file) || ('..' == $file)) {
        continue;
    } else {
        $images[] = $file;
    }
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
<p><a href="/guestBook.php">Гостевая книга</a></p>

<?php if (isset($name)): ?>
    <p>Привет, <?php echo $name; ?>!</p>
    <a href="/logout.php">Выйти</a>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myimg">
        <button type="submit">Отправить</button>
    </form>
<?php else: ?>
    <p><a href="/login.php">Войти</a></p>
<?php endif; ?>

<?php
foreach ($images as $image): ?>

    <a href="/image.php?id=<?php echo $image; ?>"><img src="/img/<?php echo $image; ?>" width="300"></a>

<?php endforeach; ?>

</body>
</html>
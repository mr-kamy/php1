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
<a href="/gallery.php">Галерея</a>
<a href="/news.php">Новости</a>
<h2>Гостевая книга</h2>

<?php foreach ($guestBook->getRecords() as $record): ?>
    <article style="border: dotted gray 1px; margin-bottom: 20px">
        <?php echo $record->getMessage(); ?>
    </article>
<?php endforeach; ?>

<form action="/append.php" method="post">
    <input type="text" name="message">
    <button type="submit">Отправить</button>
</form>

</body>
</html>
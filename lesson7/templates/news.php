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
<a href="/gallery.php">Галерея</a>
<h2>Новости</h2>
<?php foreach ($news->getNews() as $article): ?>
<article>
    <a href="/article.php?id=<?php echo $article->id; ?>"><h3><?php echo $article->title; ?></h3></a>
    <p><?php echo mb_substr($article->text,0, 150) . '...' ; ?></p>
</article>
<?php endforeach; ?>

</body>
</html>
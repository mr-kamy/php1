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
<a href="/news.php">Все новости</a>
<article>
    <h3><?php echo $article->caption; ?></h3>
    <p><?php echo $article->text; ?></p>
    <cite><?php echo $article->author; ?></cite>
</article>
</body>
</html>
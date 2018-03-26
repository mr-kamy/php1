<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Орел</a>
        </nav>
    </header>
    <h1>Hello, world!</h1>

    <div class="container">
        <div class="row">

            <?php foreach ($images as $image): ?>
                <div class="col-lg-3 col-md-4 col-6 thumb">
                    <a href="/lesson9">
                        <img class="img-fluid" src="<?php echo $path . $image->name; ?>" alt="...">
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
</body>
</html>
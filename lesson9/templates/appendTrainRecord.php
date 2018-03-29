<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Орёл</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/lesson9">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lesson9/gallery.php">Фотогалерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lesson9/trainSchedule.php">Расписание поездов</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/lesson9/admin.php">Админ панель<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <form action="/lesson9/appendTrainRecord.php" method="post">
        <div class="form-group">
            <label for="train">Название поезда</label>
            <input type="text" class="form-control" id="train" required placeholder="Поезд" name="train">
        </div>
        <div class="form-group">
            <label for="arrival">Время прибытия</label>
            <input type="time" class="form-control" id="arrival" required placeholder="Время прибытия" name="arrival">
        </div>
        <div class="form-group">
            <label for="train">Время отправления</label>
            <input type="time" class="form-control" id="departure" required placeholder="Время отправления" name="departure">
        </div>
        <div class="form-group">
            <label for="train">Назначение</label>
            <input type="text" class="form-control" id="appointment" required placeholder="Назначение" name="appointment">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
</body>
</html>
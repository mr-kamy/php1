<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <table class="table table-striped">
        <thead class="thead-inverse">
        <tr>
            <th>Поезд</th>
            <th>Прибытие</th>
            <th>Отравление</th>
            <th>Назначение</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($schedule as $record): ?>
            <tr>
                <td><?php echo $record->train; ?></td>
                <td><?php echo $record->arrival; ?></td>
                <td><?php echo $record->departure; ?></td>
                <td><?php echo $record->appointment; ?></td>
                <td><a href="#">Редактировать</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
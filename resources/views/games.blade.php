<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
</head>
<body>
<h2>Расписание матчей:</h2>
<table border="1">
    <thead>
    <td>id</td>
    <td>Первая команда</td>
    <td>Вторая команда</td>
    </thead>
    @foreach($games as $game)
        <tr>
            <td>{{$game->id}}</td>
            <td>{{$game->team ? $game->team->name : 'Нет команды'}}</td>
            <td>{{$game->opponent ? $game->opponent->name : 'Нет команды'}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>


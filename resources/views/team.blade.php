<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
</head>
<body>
    <h2>{{$team ? "Матчи в которых сыграли команда ".$team->name : "Неверный ID команды"}}</h2>
    @if($team)
    <table border="1">
        <th>
            <td>id</td>
            <td>Первой команды</td>
            <td>Второй команды</td>
        </th>

    @foreach($team->games as $game)
        <tr>
            <td>{{$game->id}}</td>
            <td>{{$game->team1->name}}</td>
            <td>{{$game->team2->name}}</td>
        </tr>
            @endforeach

</table>
    @endif
</body>
</html>


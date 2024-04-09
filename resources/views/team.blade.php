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
            <td>id Первой команды</td>
            <td>id Второй команды</td>
        </th>

    @foreach($team->matches as $match)
        <tr>
            <td>{{$match->id}}</td>
            <td>{{$match->id_team1}}</td>
            <td>{{$match->id_team2}}</td>
        </tr>
            @endforeach

</table>
    @endif
</body>
</html>


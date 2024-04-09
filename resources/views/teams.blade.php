<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>605-01</title>
</head>
<body>
    <h2>Список команд:</h2>
    <table border="1">
        <thead>
        <td>id</td>
        <td>Название команды</td>
        </thead>
    @foreach($teams as $team)
        <tr>
            <td>{{$team->id}}</td>
            <td>{{$team->name}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Addition et soustraction</title>
</head>
<body>
    @if (is_numeric($n1) && is_numeric($n2))
        <h2>Addition <br> {{$n1}} + {{$n2}} = {{$n1 + $n2}}</h2>
        <h2>Soustraction <br> {{$n1}} - {{$n2}} = {{$n1 - $n2}}</h2>
    @else
        <p>No Way José</p>
    @endif
</body>
</html>

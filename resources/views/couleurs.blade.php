<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Couleurs</title>
</head>
<body>
    <h1>Liste de couleurs</h1>
    <ul>
        @if ($couleur == "rouge")
            <li style="font-weight : bold">rouge</li>
        @else
            <li>rouge</li>
        @endif
        @if ($couleur == "jaune")
            <li style="font-weight : bold">jaune</li>
        @else
            <li>jaune</li>
        @endif
        @if ($couleur == "bleu")
            <li style="font-weight : bold">bleu</li>
        @else
            <li>bleu</li>
        @endif
    </ul>
</body>
</html>

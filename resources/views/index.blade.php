<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bienvenue dans la page index votre age est : {{$age}} ans</p>
    @if($celiba)
        <p>vous etes toujours celibataire !</p>
    @elseif ($age<16)
        <p>vous etes encore jeune</p>
    @else 
        <h5>celibataire</h5>
    @endif
    <h1>Liste des maries</h1>
    <ul>
        @foreach($maries as $test)
            <li>
                {{$test}}
            </li>
        @endforeach
    </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Bienvenue dans la page welcome votre page est : {{$age}} ans </p>
    @if($celiba)
         <p>Vous etes toujours celibataire</p>
    @elseif ($age<16)
         <p>Vous etes encore jeune</p>
    @else 
    <h5>Celibataire</h5>
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

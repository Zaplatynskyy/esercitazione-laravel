<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computers</title>
</head>
<body>
    <h1>Computers</h1>
    
    @foreach ($computers as $computer)
        <h2>{{$computer->brand}}</h2>
        <h3>{{$computer->series}}</h3>
        <ul>
            <li>{{$computer->screen_size}} pollici</li>
            <li>{{$computer->resolution}}</li>
            <li>Risoluzione: {{$computer->resolution}}</li>
            <li>Processore: {{$computer->precessor}}</li>
            <li>{{$computer->ram}}GB RAM</li>
            <li>Scheda grafica: {{$computer->graphics_card}}</li>
            <li>Prezzo: {{$computer->price}}€</li>
        </ul>
    @endforeach
</body>
</html>
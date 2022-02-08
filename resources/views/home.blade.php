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
            <li><strong>{{$computer->screen_size}}</strong> pollici</li>
            <li><strong>{{$computer->resolution}}</strong></li>
            <li>Risoluzione: <strong>{{$computer->resolution}}</strong></li>
            <li>Processore: <strong>{{$computer->processor}}</strong></li>
            <li><strong>{{$computer->ram}}</strong>gb RAM</li>
            <li>Scheda grafica: <strong>{{$computer->graphics_card}}</strong></li>
            <li>Prezzo: <strong>{{$computer->price}}</strong>€</li>
        </ul>
    @endforeach
</body>
</html>
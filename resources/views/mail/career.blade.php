<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email per lavoro</title>
</head>
<body>
     
    <img src="{{ $message->embed(public_path() . '/img/logo.png') }}" width="50%" alt="">
    <h1>Richiesta ricevuta</h1>
    <h4>Richiesta per il ruolo di {{$info['role']}}</h4>
    <p>Ricevuta da {{$info['email']}}</p>

    <h4>Messaggio:</h4>
    <p>{{$info['message']}}</p>

</body>
</html>
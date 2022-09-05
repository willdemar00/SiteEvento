<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>pagian 2</h1>
    @foreach($events as $eve)
    {{$eve->titulo}}--{{$eve->descricao}}<br>
    @endforeach
    <a href="/">voltar</a>
    
</body>
</html>
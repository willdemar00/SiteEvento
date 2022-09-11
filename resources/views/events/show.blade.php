<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    
    <main class="conter1">
        <span>
            <div class="imgInfor">
                 <img class="imgCont" src="/img/events/{{$events->imagem}}"  alt="{{$events->titulo}}">
                <h1>{{$events->titulo}}</h1>
            </div>
            <div class="txt">
                <p>{{$events->cidade}}</p>
                <p>{{$events->descricao}}</p>
            
            </div>
        </span>
    </main>
    <a href="/">Home</a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .menu a.ativo{
    
    border: solid 2px #4B4573 ;
    border-radius: 10px;
    padding: 2px 5px 2px 5px;
    background-color:#7EB0F2;
    color: #F2F2F2;
    


}
    </style>
    <title>Document</title>
</head>
<body>
    
<header>
        <nav>
            <div class="conter">
            <img src="img/loga1.png" alt="">
                <ul class="menu">
                    <li>
                    <a class="ativo" href="/eventos">Eventos</a>
                    <li>
                    <a href="/criarEvento">Criar Eventos</a>
                    <li>
                    <a href="#">Entrar</a>
                    <li>
                    <a href="#">Cadastrar</a>
                </ul>
            </div>
        </nav>
        
        
    
        </header>
     <main>
     @if(session('msg'))
        <h4 class="msg">{{session('msg')}}</h4>
        @endif
     <form action="">
            <div class="colun">
                <div>
                    <label for="ibusca">Buscar Eventos</label><br>
                    <div>
                        <input type="text" name="busca" id="ibusca" placeholder="procurar...">
                        <input class="botton" type="submit" value="Buscar">
                    </div>
                </div>

            </div>
            <h3>Proximos Eventos</h3>
        </form>
        
        @foreach($events as $eve)
        <div class="card">
            <img src="img\loga1.png" alt="">
            
            <h4>{{$eve->titulo}}</h4>
            <h6>10/12/2022</h6>
            <h6>X participantes</h6>
            <p><a href="#">Saber Mais...</a></p>

        </div>
        @endforeach

    </main>
    <a href="/">Home</a>
</body>
</html>
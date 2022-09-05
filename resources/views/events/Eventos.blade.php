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
    background-color:#7BABF1;
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
     <form action="">
            <div class="colun">
                <div>
                    <label for="busca">Buscar Eventos</label><br>
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
            
            <p>{{$eve->titulo}}</p>

        </div>
        @endforeach
    </main>
    <a href="/">Home</a>
</body>
</html>
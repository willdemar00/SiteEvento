<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .menu a.ativo {

            border: solid 2px #4B4573;
            border-radius: 10px;
            padding: 2px 2px 2px 2px;
            background-color: #7EB0F2;
            color: #F2F2F2;



        }
    </style>
    <title>Document</title>
</head>

<body>

<header>
        <nav>
            <div class="conter">
                <img src="img/exemplo.png" alt="">
                <ul class="menu">
                        @auth
                    <li>
                        <a class="ativo"  href="/eventos">Eventos</a>
                    <li>
                        <a href="/criarEvento">Criar Eventos</a>
                        
                    <li>
                        <a href="/dashboard">Meus Eventos</a>
                    <li>
                        <form action="/logout" method="POST">
                        @csrf
                            <p><a href="/dashboard" onclick="event.preventDefault();this.closest('form').submit();">Sair</a></p>
                        </form>
                        @endauth
                        @guest
                    <li>
                        <a href="/login">Entrar</a>
                    <li>
                        <a href="/register">Cadastrar</a>
                        @endguest
                </ul>
            </div>
        </nav>


    </header>
    <main>
        @if(session('msg'))
        <h4 class="msg">{{session('msg')}}</h4>
        @endif
        <form action="/eventos" method="GET">
            <div class="colun">
                <div>
                    <label for="buscar">Buscar Eventos</label><br>
                    <div>
                        <input type="text" name="buscar" id="buscar" placeholder="procurar...">
                        <input class="botton" type="submit" value="Buscar">
                    </div>
                </div>

            </div>
            @if($buscar)
            <h3>buscando por: {{$buscar}}</h3>
            @else
            <h3>Proximos Eventos</h3>
            @endif
        </form>

        @foreach($events as $eve)
        <div class="card">
            <img src="img\events/{{$eve->imagem}}" alt="">

            <h4>{{$eve->titulo}}</h4>
            <h6>{{date('d/m/Y',strtotime($eve->data))}}</h6>
            <h6>X participantes</h6>
            <p><a href="/infor/{{$eve->id}}">Saber Mais...</a></p>

        </div>
        @endforeach
        @if(count($events)==0)
        <p>Não há evento disponiveis</p>
        @endif

    </main>
    <a href="/">Home</a>
</body>

</html>
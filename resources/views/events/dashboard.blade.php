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
<header>
    <nav>
        <div class="conter">
            <img src="img/exemplo.png" alt="">
            <ul class="menu">
                @auth
                <li>
                    <a href="/eventos">Eventos</a>
                <li>
                    <a href="/criarEvento">Criar Eventos</a>

                <li>
                    <a class="ativo" href="/dashboard">Meus Eventos</a>
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

<body>
    <main>
        @if(session('msg'))
        <h4 class="msg">{{session('msg')}}</h4>
        @endif
        @if(count($events)>0)
        @foreach($events as $eve)


        <div class="table">
            <table>
                <tr>
                    <th scope="cal">{{$loop->index+1}}#</th>
                    <th> Nome do Evento</th>
                    <th>Ação</th>
                </tr>
                <tr>
                    <td>{{$eve->id}}</td>
                    <td rowspan="2">{{$eve->titulo}}</td>
            
                <td>
                    <form action="/evento/{{$eve->id}}">
                        <input class="botCriar2" type="submit" value="Deletar"><br>
                        <input class="botCriar2" type="submit" value="Editar">
                    </form>
                </td>
                </tr>
            </table>
        </div>

        @endforeach
        @else
        Voçê não tem eventos criados! <br>
        Deseja criar?:
        <a href="/criarEvento"> Criar Evento</a>
        @endif

    </main>

</body>

</html>
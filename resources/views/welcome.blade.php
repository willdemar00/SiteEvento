<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
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


    </main>
</body>

</html>
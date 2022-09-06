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
                    <a href="/eventos">Eventos</a>
                    <li>
                    <a class="ativo" href="/criarEvento">Criar Eventos</a>
                    <li>
                    <a href="#">Entrar</a>
                    <li>
                    <a href="#">Cadastrar</a>
                </ul>
            </div>
        </nav>
        
        
    </header>
<main>
    <form class="dados" action="/criar" method="POST">
        @csrf
        <div>
            <label for="inome">Criar Evento</label></br>
        </div>
            <div class="criar">

                <label for="titulo">Nome:</label>

                <input type="text" name="titulo" placeholder="Nome do evento..." id="titulo"><br>

                <label for="cidade">Cidade:</label>

                <input type="text" name="cidade" placeholder="Nome da cidade..." id="cidade"><br>

                <label class="private" for="privado">Privado?</label>

                <select class="selec" name="privado" id="privado">
                <option value="1">Nao</option>
                <option value="0">sim</option>
                </select>

                <label for="descricao">Descricão</label>

                <input type="text" name="descricao" placeholder="fala sobre o evento..." id="descricao">
                
            </div>
            <input class="botCriar" type="submit" value="Criar">
        
    </form>
    
    
</main>
<a href="/">Home</a>
</body>
</html>

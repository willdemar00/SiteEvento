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
    padding: 2px 2px 2px 2px;
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
            <img src="img/exemplo.png" alt="">
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
    <form class="dados" action="/criar" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="titulo">
             <h2>Criar Evento</h2>
        </div>
        
        
            <div class="criar">
               <label for="imagem">Imagem</label>
               <input type="file" name="imagem" id="imagem" required>

                <label for="titulo">Nome:</label>

                <input required type="text" name="titulo" placeholder="Nome do evento..." id="titulo" required ><br>

                <label for="cidade">Cidade:</label>

                <input type="text" name="cidade" placeholder="Nome da cidade..." id="cidade"required><br>

                <label for="data">Data do evento</label>

                <input type="date" name="data" id="idate">

                <label class="private" for="privado">Privado?</label>

                <select class="selec" name="privado" id="privado">
                <option value="1">Nao</option>
                <option value="0">sim</option>
                </select>

                <label for="descricao">Descricão</label>

                <input type="text" name="descricao" placeholder="fala sobre o evento..." id="descricao"required>

                <label for="">Adicione itens de infra estrutura </label>
            </div> 
<div class="chak">
    
                   
                        <input id="Ichak" type="checkbox" name="itens[]" id="palco"value="Palco"> Palco <br>
                        <input id="Ichak"type="checkbox" name="itens[]" id="cerveja"value="Cerveja Gratis">  Cerveja Gratis<br>
                        <input id="Ichak"type="checkbox" name="itens[]" id="brindes"value="Brindes">  Brindes <br>
                        <input id="Ichak"type="checkbox" name="itens[]" id="acentos" value="acentos">  Acentos <br>
                            
                        </div>
                   
            
                
            
            <input class="botCriar" type="submit" value="Criar">
        
    </form>
    
    
</main>
<a href="/">Home</a>
</body>
</html>

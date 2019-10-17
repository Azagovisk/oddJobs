
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet"/>
        <title></title>
    </head>
    <body>
        
        <h2 class="direita-menu">Cadastro do Menu</h2>
        <form class="direita-cardapio" action="processa.php" method="POST">
        <label for="dia">Dia da Semana: </label>&ensp;&ensp;
        <select id="dia" name="dia">
            <option value="segunda">Segunda-feira</option>
            <option value="terca">Terça-feira</option>
            <option value="quarta">Quarta-feira</option>
            <option value="quinta">Quinta-feira</option>
            <option value="sexta">Sexta-feira</option>
        </select> <br/><br/>
        
        <label  for="turno">Turno: </label>&emsp;&emsp;&emsp;&ensp;
        <text id="turno" >Manhã</text><input type="radio" name="turno" value="manha"/>
        <text id="turno" >Tarde</text><input type="radio" name="turno" value="tarde"/>
        <text id="turno" >Noite</text><input type="radio" name="turno" value="noite"/>
        <br/><br/>
        
        <label for="texto">Refeição: </label>&emsp;&emsp;&emsp;&emsp;
        <textarea id="textarea" name="texto"></textarea><br/><br/>
        <input type="submit" id="botao-cardapio" name="Cadastrar" value="Cadastrar"/>
        </form>
        <nav id="menu" class="menu-vertical">
            <ul>
                <a href="cadastro.php">Cadastro de Menu</a>
                </br>
                <a href="Listagem.php">Listagem de Menu</a>
                </br>
                <a href="logout.php">Sair</a>
                </br>
            </ul>
        </nav>
    </body>
</html>

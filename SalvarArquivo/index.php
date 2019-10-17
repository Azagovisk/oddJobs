<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="processaJogos.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"/> <br/>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="cetegoria">
                <option name="fps" id="fps" value="fps">FPS</option>
                <option name="rpg" id="rpg" value="rpg">RPG</option>
                <option name="mmo" id="mmo" value="mmo">MMO</option>
                <option name="moba" id="moba" value="moba">MOBA</option>
                <option name="esporte" id="esporte" value="esporte">Esporte</option>
                <option name="simulador" id="simulador" value="simulador">Simulador</option>
            </select><br/>
            <label for="ano">Ano de lançamento:</label>
            <input type="number" id="ano" name="ano"/> <br/>
            
            <label for="data">Data de Atualização:</label>
            <input type="date" id="data" name="data"/> <br/>
            <p>Plataforma: </p> <br/>
            <label for="pc">PC:</label>
            <input type="checkbox" id="pc" name="pc" value="PC"/> 
            
            <label for="xbox">XBOX:</label>
            <input type="checkbox" id="xbox" name="xbox" value="XBOX"/> 
            
            <label for="ps4">PS4:</label>
            <input type="checkbox" id="ps4" name="ps4" value="PS4"/> <br/>
            
            <input type="submit" name="cadastrar" value="Cadastrar"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>

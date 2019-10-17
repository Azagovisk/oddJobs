<!DOCTYPE html>
<html>
<head>
    <title>Sistema da Aposta</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div id="divCad">
<form action="processaAdd.php" method="POST">
    <label for="login">Login do Administrador: </label>
    <input type="text" name="login" id="loginCad"/>
    <br/>
    <br/>
    <label for="senha">Senha: </label>
    <input type="password" name="senha" id="senhaCad"/>

    <label for="senha2">Repita a senha: </label>
    <input type="password" name="senha2" id="senha2Cad"/>
    <br/>
    <br/>
    <label for="imagem">Imagem de Perfil:</label>
    <input name="imagem" type="file" size="30">
    <br/>
    <br/>
    <button type="submit" name="cadastar" id="cadastrar" class="button shadow">Cadastrar</button>
</form>
<a href="paginaAdm.php"><button id="voltar" name="voltar" class="button shadow">Voltar</button></a>
</div>
</body>
</html>
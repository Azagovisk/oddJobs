<!DOCTYPE html>
<html>
<head>
    <title>Sistema da Aposta</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h3>Por favor, faça seu login</h3>
    <div id="divCenter">
    <form action="processaLoginAdm.php" method="POST">
        <label for="login">Login: </label>
        <input type="text" name="login" id="loginAdm" />

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senhaAdm" />
        <br/>
        <button type="submit" id="submit" class="button shadow">Login</button>
    </form>
    <a href="index.php"><button id="voltar" name="voltar" class="button shadow">Voltar</button></a>
    </div>
</body>
</html>
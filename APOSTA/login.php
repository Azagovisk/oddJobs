<!DOCTYPE html>
<html>
<head>
    <title>Sistema da Aposta</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <h3>Por favor, faça seu login ou cadastre-se!</h3>
    <div id="divCenter">
    <form action="processaLogin.php" method="POST">
        <label for="login">Login: </label>
        <input type="text" name="login" id="login" /><br/>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" />
        <br/>
        <button type="submit" id="submit" class="button shadow">Login</button>
    </form>

    <a href="cadastro.php"><button id="cadastro" name="cadastro" class="button shadow">Cadastre-se</button></a>
    <a href="index.php"><button id="voltar" name="voltar" class="button shadow">Voltar</button></a>
    </div>
</body>
</html>
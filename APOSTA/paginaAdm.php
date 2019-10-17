<!DOCTYPE html>
<html>
<head>
	<title>Sistema da Aposta</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<header class="header">

<div>
	<img src="imagens/padrao.png" width="40" height="40" class="imagem">
	<?php
		//se não existir imagem no banco, padrão, senão, imagem do banco
	session_start();
echo "<br/>". $_SESSION['loginADM'];
	?>
</div>
	<br/>
	<a href="logout.php"><img src="imagens/logout.png" width="30" height="30" /></a>
</header>
<div class="divContent">
<?php
echo "Olá <b>" . $_SESSION['loginADM'] . "</b>, seja bem-vindo!";
?>
<br/>
<br/>
<p>Você acessou a página do Administrador, por favor escolha uma opção</p>

<a href="lista.php"><button name="lista" id="lista" class="button shadow"><img src="imagens/lista.png" width="30" height="30" />Lista de Usuários</button></a>
<a href="modifica.php"><button name="modifica" id="modifica" class="button shadow"><img src="imagens/editar.png" width="30" height="30" />Alterar Informações</button></a>
<a href="add.php"><button name="add" id="add" class="button shadow"><img src="imagens/add.png" width="30" height="30" />Adicionar Administrador</button></a>
</div>
</body>
</html>

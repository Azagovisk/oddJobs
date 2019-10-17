<!DOCTYPE html>
<html>
<head>
	<title>Sistema da Aposta</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<header class="header">

<div>
<?php
session_start();
$login = $_SESSION['login'];
include_once 'conexao.php';
$querySe = " SELECT * FROM usuarios WHERE login = '$login' ";
            //BUSCA OS REGISTROS NO BANCO e salvando na variável Result
            if($result=$conn->query($querySe)){
                while ($row = $result->fetch_assoc()) {
                    $imagem = $row["imagem"];
                    
            }
        }
	//$imagem = "SELECT * FROM usuarios WHERE login = '$login' LIMIT 1";
	//$imagem = "SELECT `imagem` FROM `usuarios` WHERE login = '$login' ";
	if($imagem != null){
		echo "<img src='{$imagem}.png' width='40' height='40' class='imagem'>";
	}	
?>
	
	<?php
		//se não existir imagem no banco, padrão, senão, imagem do banco
	
echo "<br/>". $_SESSION['login'];
	?>
</div>
	<br/>
	<a href="logout.php"><img src="imagens/logout.png" width="30" height="30" /></a>
</header>
<div class="divContent">

	<?php

echo "Olá " . $_SESSION['login'] . ", seja bem-vindo!<br/>";

?>
<br/>
<br/>
<p>Você acessou a página do Usuário, por favor escolha uma opção</p>
<a href="modifica.php"><button name="modifica" id="modifica" class="button shadow"><img src="imagens/editar.png" width="30" height="30" />Alterar Informações</button></a>
</div>
</body>
</html>

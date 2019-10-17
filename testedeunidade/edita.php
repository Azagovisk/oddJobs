<?php
include_once 'functions.php';
$idAtual = 0;
if($_GET){
	$req = $_GET['id'];
	$reqArray = explode('/', $req);
	$buscador = new BuscadorDePessoas();
	$pessoaArray = $buscador->buscaUm($reqArray[0]);
	$idAtual = $reqArray[0];
}else{
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pessoas</title>
</head>
<body>
	<div>
		<form action="processaEdita.php" method="POST">
			<label for="name">Nome:</label>
			<input type="text" name="nameE" value="<?php if(isset($pessoaArray[0])){echo $pessoaArray[0];} ?>" />

			<label for="email">E-mail:</label>
			<input type="email" name="emailE" value="<?php if(isset($pessoaArray[2])){echo $pessoaArray[2];} ?>"/>
			<br/>
			<input type="hidden" name="registroE" value="<?php if(isset($pessoaArray[1])){echo $pessoaArray[1];} ?>"/>

			<input type="submit" name="enviar" value="Editar">
		</form>
	</div>

</body>
</html>
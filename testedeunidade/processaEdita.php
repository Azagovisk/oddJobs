<?php
include_once 'functions.php';
if($_POST){
	$nome = $_POST['nameE'];
	$NumeroRegistro = $_POST['registroE'];
	$email = $_POST['emailE'];
	$pessoa = new EditPessoa();
	$error = $pessoa->edit($nome, $NumeroRegistro, $email);
	if($error == false){
			echo"Sucesso ao Editar";
            echo "<br/>";
            echo "<a href='index.php'>Voltar</a>";
			}else{
			echo"Erro ao Editar";
            echo "<br/>";
            echo "<a href='index.php'>Voltar</a>";
			}
}else{
	header("location: index.php");
}

?>
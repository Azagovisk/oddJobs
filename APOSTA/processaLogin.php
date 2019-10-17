<?php
include_once 'conexao.php';

	if($_POST){

		$login = $_POST['login'];
		$senha = $_POST['senha'];

		
		$sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' LIMIT 1";
		$resultado = mysqli_query($conn, $sql);
		$numero = mysqli_num_rows($resultado); //TALVEZ SÓ RESULTADO
		//$query1 = mysql_num_rows(mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha' LIMIT 1"));
		if($numero != 1){
			echo "<script>alert('Usuário não cadastrado'); history.back(); </script>";
		}else{
			session_start();
			$_SESSION['login'] = $login;
			header("location: acesso.php");
			
			
			
		}
	
	}else{
		header("location: login.php");
	}
	



?>
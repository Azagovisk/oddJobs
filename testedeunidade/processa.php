<?php
include_once 'functions.php';
	if($_POST){
		$nome = $_POST['name'];
		$NumeroRegistro = $_POST['registro'];
		$email = $_POST['email'];
		$pessoa = new Pessoa($nome, $NumeroRegistro, $email);
		$status = $pessoa->add();
		if($status == true){
			header("location: index.php");
		}else{
			echo"Ocorreu um erro ao Cadastrar";
            echo "<br/>";
            echo "<a href='cadastro.php'>Voltar</a>";
		}
	}elseif($_GET){
		$req = $_GET['id'];
		$reqArray = explode('/', $req);
		//reqArray[0] == ID && reqArray[1] == Action: edit; delete; view
		if($reqArray[1] == 'edit'){
			header("location: edita.php?id=".$reqArray[0]."/edit");
		}

		if($reqArray[1] == 'delete'){
			$pessoa = new DeletePessoa();
			$error = $pessoa->delete($reqArray[0]);
			if($error == false){
			echo"Sucesso ao Deletar";
            echo "<br/>";
            echo "<a href='index.php'>Voltar</a>";
			}else{
			echo"Erro ao Deletar";
            echo "<br/>";
            echo "<a href='index.php'>Voltar</a>";
			}
		}

		if($reqArray[1] == 'view'){
			echo "<a href='index.php'>Voltar</a>";
			echo "<br/>";
			echo "
				<table border='1px'>
			<tr>
				<th>Nome</th>
				<th>Número do Registro</th>
				<th>E-mail</th>
			</tr>";
			
				$pessoas = new BuscadorDePessoas();
				$pessoas->buscarCompleto();

		echo "</table>";
		}

	}else{
		header("location: index.php");
	}

?>
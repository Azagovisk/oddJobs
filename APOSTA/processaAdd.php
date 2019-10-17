<?php
	if($_POST){

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$senha2 = $_POST['senha2'];
	$imagem = $_POST['imagem'];
	if($senha == $senha2){
		$conn = new mysqli("localhost", "root", "", "aposta");
            if($conn->connect_errno){
                echo "<p>Atenção, erro de conexão: ". $conn->connect_error. "</p>";
            }else{
                echo "<p>Sucesso na conexão! </p>";
            }
            $query = "INSERT INTO adms(login,senha,imagem)";
            $query.="VALUES ('$login', '$senha', '$imagem')";
            //EXECUTA o comando SQL
            $conn->query($query);
            //Verifica se houve algum registro afetado(se o INSERT funcionou)
            if($conn->affected_rows>0){
                echo"Sucesso no INSERT";
            }else{
                echo "Ocorreu um erro no INSERT";
            }
          
	}else{
		header("location: paginaAdm.php");
	}
		
	}else{
		header("location: paginaAdm.php");
	}
	


?>
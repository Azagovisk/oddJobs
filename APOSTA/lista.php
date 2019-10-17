<!DOCTYPE html>
<html>
<head>
	<title>Lista de Usuários</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="divContent">
	<?php
	echo "<h3>Lista de Usuários cadastrados no Sistema </h3>";
	 $conn = new mysqli("localhost", "root", "", "aposta");
            if($conn->connect_errno){
                echo "<p>Atenção, erro de conexão: ". $conn->connect_error. "</p>";
            }
            $querySe = " SELECT * FROM usuario ";
            //BUSCA OS REGISTROS NO BANCO e salvando na variável Result
            if($result=$conn->query($querySe)){
                while ($row = $result->fetch_assoc()) {
                    echo "ID: " . $row["id"]. "<br/>";
                    echo "Login: " . $row["login"]. "<br/>";
                    echo "Imagem: " . $row["imagem"]. "<br/>";
                    echo "<br/><br/>";
                }
            }
             //FECHA a conexão
            $conn->close();
/*
$result=mysql_query("SELECT * FROM usuario") or die("Impossível executar a query"); 

while($row=mysql_fetch_object($result)) { 
	echo "<img src='getImagem.php?PicNum=$row->id' \">"; 
} 


*/


?>
<a href="paginaAdm.php"><button id="voltar" name="voltar" class="button shadow">Voltar</button></a>
</div>
</body>
</html>

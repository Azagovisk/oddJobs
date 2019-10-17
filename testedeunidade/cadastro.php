<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pessoas</title>
</head>
<body>
	<div>
		<form action="processa.php" method="POST">
			<label for="name">Nome:</label>
			<input type="text" name="name" required/>

			<label for="registro">Número do Registro:</label>
			<input type="number" name="registro" required/>

			<label for="email">E-mail:</label>
			<input type="email" name="email"/>
			<br/>

			<input type="submit" name="enviar" value="Cadastrar Pessoa">
		</form>
	</div>

</body>
</html>
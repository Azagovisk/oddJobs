<?php include_once 'functions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Pessoas</title>
</head>
<body>
	<div>
		<a href="cadastro.php">Cadastrar Pessoa</a>
	</div>
	<div>
		<table border="1px">
			<tr>
				<th>Nome</th>
				<th>Número do Registro</th>
				<th>Ação</th>
			</tr>
			<?php
				$pessoas = new BuscadorDePessoas();
				$pessoas->buscar();
			?>
		</table>
	</div>

</body>
</html>


<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Sistema</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" /> 
	</head>
	<body class="subpage">
			<?php
					include_once 'cliente.class.php';
		
					if(!isset($_POST['atividade'])){
						$ativo="Atividade não selecionada!";
					}elseif($_POST['atividade'] == "inativo"){
						$ativo = "Inativo";
					}elseif($_POST['atividade'] == "ativo"){
						$ativo = "Ativo";
					}
		
					
					$identificador = $_POST['identificador'];
					$nome = $_POST['nome'];
					$endereco = $_POST['endereco'];
					$datanascimento = $_POST['datanascimento'];
					$senha = $_POST['senha'];
					$email = $_POST['email'];
		
					$cliente = new cliente();
					$cliente->setAtivo($ativo);
					$cliente->setIdentificador($identificador);
					$cliente->setNome($nome);
					$cliente->setEndereco($endereco);
					$cliente->setDatanascimento($datanascimento);
					$cliente->setSenha($senha);
					$cliente->setEmail($email);
			?>

			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Projection</strong> by TEMPLATED</a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="elements.html">Cliente</a>
						<a href="elements3.php">Empréstimos</a>
						<a href="elements2.html">Acervo Bibliográfico</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Cliente</h2>
						<p>Informações do Cliente</p>
					</header>
					<hr class="major" />
							<p align="center"><?php echo "Atividade: ". $cliente->getAtivo() ?></p>
							<p align="center"><?php echo "Nome: ". $cliente->getNome(); ?></p>
							<p align="center"><?php echo "ID: ". $cliente->getIdentificador(); ?></p>
							<p align="center"><?php echo "Email: ". $cliente->getEmail(); ?></p>
							<p align="center"><?php echo "Endereço: ". $cliente->getEndereco(); ?></p>
							<p align="center"><?php echo "Data de nascimento: ".date('d/m/Y', strtotime($cliente->getDatanascimento())); ?></p>
					<hr/>
							<a href="elements.html"><button class="button">Voltar</button></a>				
				</div>
			</section>
			
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
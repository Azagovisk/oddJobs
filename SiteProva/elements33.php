
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
		
		    include_once 'Emprestimos/emprestimo.class.php';
		   
		
		    $id = $_POST['id'];
		    $data = $_POST['data'];
		    $tipo = $_POST['tipo'];
		    $emp = new Emprestimo();
		    $emp->setId($id);
		    $emp->setData($data);
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
						<h2>Empréstimos</h2>
						<p>Informações de Empréstimo</p>
					</header>

					<hr class="major" />
							<p align="center"><?php if($tipo=="Realizar Empréstimo"){
       													$valor = $_POST['valor'];
        												$emp->setValor($valor);
        												echo "ID do empréstimo: ". $emp->getId(). "<br/>";
        												echo "Data do empréstimo: ".date('d/m/Y', strtotime($emp->getData())). "<br/>";
        												echo "Data de Devolução: ". date('d/m/Y', strtotime("+5 days", strtotime($emp->getData()))). "<br/>";
        												echo "O valor do empréstimo é: R$ ". $emp->getValor(). "<br/>";
        												echo "Empréstimo realizado com sucesso!";
        												 } ?>
        											
        					</p>
							<p align="center"><?php  if($tipo=="Devolução"){
													/*
       													$dev = $_POST['vDev'];
        												$emp->setValor($dev);
        												*/
        												echo "ID do empréstimo: ". $emp->getId(). "<br/>";
        												echo "Data do empréstimo: ".date('d/m/Y', strtotime($emp->getData())). "<br/>";
        												$data1= new DateTime(date('Y-m-d', strtotime("+5 days", strtotime($emp->getData()))));
        												$data2 = new DateTime(date('Y-m-d', strtotime("now")));

        												$aux = $data2->diff($data1);

        												if($aux->d > 0 && $data1<$data2){
        													$_POST['vDev']+=10;
        													$multa="sim";
        												}else{
        													$multa="não";
        												}
        												$emp->setValor($_POST['vDev']);
        												echo "Valor da devolução é: R$ ". $emp->getValor(). "<br/>";
        												}?>										
        					</p>
							<p align="center"><?php if($tipo=="Visualizar dados"){
       													echo "ID do Empréstimo: ". $emp->getId(). "<br/>";
        												echo "Data do Empréstimo: ". date('d/m/Y', strtotime($emp->getData())). "<br/>";
        												}?>		
    						</p>
							<p align="center"><?php if ($tipo!= "Visualizar dados"&&$tipo!= "Devolução"&&$tipo!= "Realizar Empréstimo") { echo"Você não selecionou uma opção válida <br/>"; }?></p>
					<hr/>
							<a href="elements3.php"><button class="button">Voltar</button></a>				
				</div>

			</section>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
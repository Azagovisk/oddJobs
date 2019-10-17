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
	
			include_once'Publicacao/livro.class.php';
			include_once'Publicacao/revista.class.php';
			include_once'Publicacao/artigo.class.php';
	
			$codigo = $_POST['codigo'];
			$assunto = $_POST['assunto'];
			$titulo = $_POST['titulo'];
			$editora = $_POST['editora'];
			$ano = $_POST['ano'];
			$tipo = $_POST['tipo']; 
	
			if($tipo =="Livro"){
	
				$edicao = $_POST['edicao'];
				$isbn = $_POST['isbn'];
				$autor = $_POST['autor'];
				$livro = new Livro($edicao, $isbn, $autor);
				$livro->setCodigo($codigo);
				$livro->setAssunto($assunto);
				$livro->setTitulo($titulo);
				$livro->setEditora($editora);
				$livro->setAno($ano);
	
			}elseif($tipo =="Revista"){
				$colecao = $_POST['colecao'];
				$ar1 = $_POST['artigo1'];
				$ar2 = $_POST['artigo2'];
				$ar3 = $_POST['artigo3'];
				$ar4 = $_POST['artigo4'];
				$ar5 = $_POST['artigo5'];
	
				$revista = new revista();
				$revista->setColecao($colecao);
				$revista->setCodigo($codigo);
				$revista->setAssunto($assunto);
				$revista->setTitulo($titulo);
				$revista->setEditora($editora);
				$revista->setAno($ano);
				$revista->setArtigos($ar1);
				$revista->setArtigos($ar2);
				$revista->setArtigos($ar3);
				$revista->setArtigos($ar4);
				$revista->setArtigos($ar5);
			}
	
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
						<h2>Acervo Bibliográfico</h2>
						<p>Informações do Acervo</p>
					</header>
					<hr class="major" />
							<!--Revista-->
							<p align="center"><?php if (isset($revista)){ echo "Código: ". $revista->getCodigo(); } ?></p>
							<p align="center"><?php if (isset($revista)){ echo "Coleção: ". $revista->getColecao(); } ?></p>
							<p align="center"><?php if (isset($revista)){ echo "Assunto: ". $revista->getAssunto(); }?></p>
							<p align="center"><?php if (isset($revista)){ echo "Título: ". $revista->getTitulo(); }?></p>
							<p align="center"><?php if (isset($revista)){ echo "Editora: ". $revista->getEditora(); }?></p>
							<p align="center"><?php if (isset($revista)){ echo "Ano: ". $revista->getAno(); }?></p>
							<p align="center"><?php if (isset($revista)){ echo "Artigos: "; }if (isset($revista)){ echo $revista->getArtigos(); }?></p>
							<p align="center"><?php if (isset($revista)){ echo "<p>Publicação cadastrada com sucesso!</p>"; }?></p>

							<!--Livro-->
							<p align="center"><?php if (isset($livro)){ echo "Código: ". $livro->getCodigo(); } ?></p>
							<p align="center"><?php if (isset($livro)){ echo "Assunto: ". $livro->getAssunto(); }?></p>
							<p align="center"><?php if (isset($livro)){ echo "Título: ". $livro->getTitulo(); }?></p>
							<p align="center"><?php if (isset($livro)){ echo "Editora: ". $livro->getEditora(); }?></p>
							<p align="center"><?php if (isset($livro)){ echo "Ano: ". $livro->getAno(); }?></p>
							<p align="center"><?php if (isset($livro)){ echo "Edição: ". $livro->getEdicao(); }?></p>
							<p align="center"><?php if (isset($livro)){ echo "ISBN: ". $livro->getIsbn(); }?></p>
							<p align="center"><?php if (isset($livro)){ echo "Autor: ". $livro->getAutor(); }?></p>
							<p align="center"><?php if (isset($livro)){ echo "<p>Publicação cadastrada com sucesso!</p>"; }?></p>

							<!--Sem seleção-->
							<p align="center"><?php if (!isset($livro)&&!isset($revista)){ echo "Você não selecionou nenhum tipo de Publicação <br/>"; }?></p>
					<hr/>
							<a href="elements2.html"><button class="button">Voltar</button></a>				
				</div>
			</section>
			
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
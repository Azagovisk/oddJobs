


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

		<script type="text/javascript">
            function inicializa(){
                
                var optEmp = document.getElementById('optEmp');
                var optDev = document.getElementById('optDev');
                                
                optEmp.style.display = 'none';
                optDev.style.display = 'none';
            }
            function validaDados() {
                

                var id = document.getElementById('id');
                var data = document.getElementById('data');

                if(id.value==""){
                    alert("Por favor, insira o ID");
                    id.focus();
                    return false;
                }
                if(data.value==""){
                    alert("Por favor, insira ou verifique a Data");
                    data.focus();
                    return false;
                }
                return true;
            }
            
            function mudaTipo(tipo) {
                
                var optEmp = document.getElementById('optEmp');
                var optDev = document.getElementById('optDev');
                    
                if(tipo=="Realizar Empréstimo"){
                    optEmp.style.display = 'block';
                    optDev.style.display = 'none';                   
                }else if(tipo=="Devolução"){
                    optEmp.style.display = 'none';
                    optDev.style.display = 'block';                   
                }else if(tipo=="Selecione..."){
                    optEmp.style.display = 'none';
                    optDev.style.display = 'none';
                      
                }else if(tipo=="Visualizar dados"){
                    optEmp.style.display = 'none';
                    optDev.style.display = 'none';
                }
            }
            
        </script>

	</head>
	<body class="subpage" onload="inicializa()">
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
						<p>Manutenção de Empréstimos</p>
					</header>
					<hr class="major" />
									<form method="POST" action="elements33.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="id" id="id" placeholder="ID do Empréstimo" />
											</div>
											<div class="6u 12u$(xsmall)">
												
												<label for="data">Data do empréstimo:</label> <input type="date" name="data" id="data" placeholder="Data do Empréstimo" />
											</div>
											
											<br>
											<br>
											<br>
											<div class="select-wrapper">
													<label for="tipo">Tipo:</label>
    										<select name="tipo" id="tipo" onchange="mudaTipo(this.value);">
    											<option name="selec" id="selec">Selecione...</option>
												<option name="emp" id="emp">Realizar Empréstimo</option>
    											<option name="dev" id="dev">Devolução</option>
           										<option name="dados" id="dados">Visualizar dados</option>
    										</select>
											</div>

									    	<div id="optEmp">
									    		 <label for="valor">Valor do Empréstimo:</label>
									    		 <input type="text" name="valor" id="valor"></input> <br/>	
									    	</div>
									    	<div id="optDev">
									    		 <label for="valor">Valor da Devolução:</label>
									    		 <input type="text" name="vDev" id="vDev"></input> <br/>
									    	</div>
									    	<br>
									    	<br>
									    	<br>
									    	<br>
									    	<br>
									    	<br>
												<ul class="actions">
													<li><input type="submit" value="Enviar" name="enviar" id="enviar" onclick="return validaDados();"/></li>
												</ul>
											</div>
										</div>
									</form>
					<hr/>
				</div>
			</section>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
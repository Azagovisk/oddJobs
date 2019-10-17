

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro Refeitório - IFRS</title>
        <link href="estilo.css" rel="stylesheet"/>
    </head>
    <body>
        
        <?php
        session_start();
          if(isset($_SESSION['email'])){
           
           $email = $_SESSION["email"];
         }else{
          header("location: index.php");
         }
        ?>
       
       <h2 class="direita"><b>Acesso Restrito</b></h2>
       <p class="direita-acesso">Caro <?php echo $email; ?></p>
       <p class="direita-acesso">Seja bem vindo ao sistema de gestão do cardápio do IFRS Campus Bento Gonçalves</p>
        <nav id="menu" class="menu-vertical">
            <ul>
                <a href="cadastro.php">Cadastro de Menu</a>
                </br>
                <a href="Listagem.php">Listagem de Menu</a>
                </br>
                <a href="logout.php">Sair</a>
                </br>
            </ul>
        </nav>
        
    </body>
</html>
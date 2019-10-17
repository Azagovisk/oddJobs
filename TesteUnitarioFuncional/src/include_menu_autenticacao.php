<?php
require_once("./Sessao.php");
require_once("./Autenticacao.php");

$sessao = Sessao::getInstance();

if ($sessao->existe("AUTENTICACAO")){
    $autenticacao = $sessao->recuperar("AUTENTICACAO");
    $nome = $autenticacao->getNome();
    echo "Bem vindo $nome!";
}
else{
    // recupea a uri atual 
    $uri = $_SERVER['REQUEST_URI'];
    $_SESSION['pagina_atual'] = $uri;
    header("Location: ./pagina_login.php");
}
?>

<?php 
if (isset($autenticacao)){
?>

<a href="pagina_sair.php">Sair</a>

<?php 
}
?>
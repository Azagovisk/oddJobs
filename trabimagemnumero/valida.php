<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];
$numero = $_POST['numero'];

if($login == 'login'&& $senha=='123'&& $numero == $_SESSION['imagem']){
    header("location: acesso.php");
    session_unset($_SESSION['imagem']);
}else{
    echo "<h1>DA UMA BITOCA NO TEU ACESSO NEGADO</h1>";
    echo"<button><a href='index.php'>Voltar</a></button>";
    session_unset();
  
}



<?php

if($_POST){
    
    $email = $_POST["email"];
    $senha = $_POST["senha"];
 
    if($email=="LucaseJosh@gmail.com" && $senha=="1020"){
        
        session_start();    
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        
        header("location: acesso.php");
    }else{
        header("location: index.php");   
    }    
}else{
    header("location: index.php");
}
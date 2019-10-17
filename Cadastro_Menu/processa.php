

<?php
include_once 'menu.class.php';

    if($_POST){
        $menu = new menu();
        if($_POST['dia']){
        switch ($_POST['dia']){
            case"segunda": $menu->setDia("Segunda-Feira"); break;
            case"terca": $menu->setDia("Terça-Feira"); break;
            case"quarta": $menu->setDia("Quarta-Feira"); break;
            case"quinta": $menu->setDia("Quinta-Feira"); break;
            case"sexta": $menu->setDia("Sexta-Feira"); break;
        }
    }else{
        header("location: cadastro.php");
    }
        if($_POST['turno']){
        switch ($_POST['turno']){
            case"manha": $menu->setTurno("Manhã"); break;
            case"tarde": $menu->setTurno("Tarde"); break;
            case"noite": $menu->setTurno("Noite"); break;
        }
    }else{
        header("location: cadastro.php");
    }
        if($_POST['texto']){
            $menu->setTexto($_POST['texto']);    
        }else{
            header("location: cadastro.php");
        }
        
        
    $fp = fopen("menu.txt", "a");

   
    $escreve = fwrite($fp, $menu->getDia()."\r\n". $menu->getTurno()."\r\n". $menu->getTexto()."\r\n");
    
    // Fecha o arquivo
    fclose($fp); 
    echo"<p class='estilo'>Menu Cadastrado com sucesso</p><br/>";
    echo"<link href='estilo.css' rel='stylesheet'/><a href='acesso.php'><button>Voltar</button></a>";
    }else{
        header("location: cadastro.php");
    }

?>
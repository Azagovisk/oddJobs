<?php

    if($_POST){
        /*
        if(isset($_POST['xbox'])){
            $xbox = $_POST['xbox'];
        }else{
            $xbox="";
        }
         * ABAIXO É MESMA COISA
       */ 
        $xbox = isset($_POST['xbox']) ? $_POST['xbox']:"";
        $pc = isset($_POST['pc']) ? $_POST['pc']:"";
        $ps4 = isset($_POST['ps4']) ? $_POST['ps4']:"";
        $nome = isset($_POST['nome']) ? $_POST['nome']:"";
        $anoL = isset($_POST['ano']) ? $_POST['ano']:"";
        $categoria = isset($_POST['categoria']) ? $_POST['categoria']:"";
        $dataA = isset($_POST['data']) ? $_POST['data']:"";
        //Salva em Arquivo TXT
        //"a" representa que o arquivo é aberto pra ser escrito
        $fp = fopen("jogo.txt", "a");
        //Escreve no arquivo
        $escreve = fwrite($fp, $nome. "\r\n");
        $escreve = fwrite($fp, $anoL. "\r\n");
        $escreve = fwrite($fp, $categoria. "\r\n");
        $escreve = fwrite($fp, $dataA. "\r\n");
        $escreve = fwrite($fp, $ps4. "\r\n");
        $escreve = fwrite($fp, $pc. "\r\n");
        $escreve = fwrite($fp, $xbox. "\r\n");
        //FECHA o Arquivo
        fclose($fp);
        header("location: leJogo.php");
    }else{
        header("location: index.php");
    }

?>
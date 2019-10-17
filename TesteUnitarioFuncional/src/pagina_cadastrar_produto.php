<?php
    /* Página responsável por orquestrar o comando de cadastrar o produto:
        1. buscar os dados do POST;
        2. criar o produto com base nos dados recebido;
        3. adicionar o produto no repositório;
    */
    require_once("RepositorioDeProdutos.php");

    if (isset($_POST["numero_registro"]) && isset($_POST["descricao"]) )
    {
        $numeroRegistro = $_POST["numero_registro"];
        $descricao = $_POST["descricao"];

        $p = new Produto();
        $p->numeroRegistro = $numeroRegistro;
        $p->descricao = $descricao;

        $rep = new RepositorioDeProdutos();
        $rep->adicionar($p);
        
        header('Location: ./pagina_produtos.php');
    }
?>

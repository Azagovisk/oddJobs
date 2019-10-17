<?php
    /* Página de interface com o usuário responsável por realizar a pesquisa dos produtos */
    include_once("./include_menu.php");
    require_once("./RepositorioDeProdutos.php");
?>
<h1>Pesquisar Produto</h1>

<form action="" method="POST">
    <label>Número do registro
        <input  type="text" name="numero_registro">
    </label>
    <label>Descrição
        <input  type="text" name="descricao">
    </label>
    <input type="submit" value="Pesquisar">
</form>
<?php

if (isset($_POST["numero_registro"]))    
{
    $numeroRegistro=$_POST["numero_registro"];

    $rep = new RepositorioDeProdutos();
    
    $produto = $rep->buscarPorNumeroRegistro($numeroRegistro);   
    
    if (isset($produto))
    {
        echo "$produto->numeroRegistro - $produto->descricao<br>";
    }

}
if (isset($_POST["descricao"])) {

    $descricao = $_POST["descricao"];

    $rep = new RepositorioDeProdutos();
    
    $produtoArray = $rep->buscarPorDescricao($descricao);   
    
    if (isset($produtoArray))
    {
        foreach ($produtoArray as $produto) {
            echo "$produto->numeroRegistro - $produto->descricao<br>";
        }
    }
    else{
        
    }
}
if(!isset($_POST["descricao"]) && !isset($_POST["numero_registro"])){
    echo "Lista vazia.";
}
?>

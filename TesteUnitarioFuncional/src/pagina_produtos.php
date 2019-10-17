<?php
    /* Página de interface com o usuário responsável por 
    exibir todos os produtos:
    */
    include_once("./include_menu.php");

    require_once("RepositorioDeProdutos.php");

    echo "<h1>Produtos</h1>";

    $rep = new RepositorioDeProdutos();
    
    $produtos = $rep->buscarTodos();
    if (isset($produtos))
    {
    foreach ($produtos as $produto) {
        echo "$produto->numeroRegistro - $produto->descricao<br>";
    }
}

?>



<?php
    /* Página de interface com o usuário responsável por 
    coletar os dados referentes ao cadastro do produto:
    */
    include_once("./include_menu.php");
?>
<h1>Cadastro de Produto</h1>
<form action="pagina_cadastrar_produto.php" method="post">
    <label> Número do Registro
        <input type="text" name="numero_registro">
    </label>
    <label> Descrição
        <input type="text" name="descricao">
    </label>
    <input type="submit" value="Cadastrar">
</form>
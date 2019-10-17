<?php
include_once './produto.class.php';

//Caso tenha sido feito um POST da página
if($_POST){
    //Verifica a existência dos campos no POST do formulário
    if(isset($_POST["nome"])&&isset($_POST["serie"])&&isset($_POST["id"])){
        
        //A verificação do campos obrigatórios ficou no javascript
        
        //Cria uma instância da classe Cliente
        // e passa dados do formulário para ela
        $produto = new Produto();
        $produto->setNome($_POST["nome"]);
        $produto->setSerie($_POST["serie"]);
        
        //Se não existir id, então é para inserir cliente
        if(empty($_POST["id"])){

            //Chama o método para inserir um cliente no banco
            $msg = $produto->salvar();
        }else{ //Senão, devemos atualizar um cliente existente
            $produto->setId($_POST["id"]);
            $msg = $produto->atualizar();
        }
        if(isset($msg)){
            if(!$msg) {
                $erro= "Ocorreu um erro no registro do produto!";
            }else{
                $msg= "Produto cadastrado/atualizado com sucesso!";
            }
        }
        
    }else{
        $erro= "<div class='erro'>Houve um erro no envio do formulário</div>";
    }
}elseif($_GET){ // Caso os dados sejam enviados via GET
   
    //Verifico qual operação será realizada
    if(isset($_GET["op"])){
        
        //Verifico a existência dos campos obrigatórios
        if (isset($_GET["id"])) {
             
            //Cria uma instância da classe Cliente
            $produto = new Produto();
            $produto->setId($_GET["id"]); 
            if ($_GET["op"] == "exc") {
            //Se operação = excluir
            
                //Chamo a função para excluir 
                $msg =$produto->excluir();
                if(isset($msg)){
                    if(!$msg) {
                            $erro= "<div class='erro'>Ocorreu um erro na exclusão do produto!</div>";
                    }else{
                            $msg= "<div class='sucesso'>Produto excluído com sucesso!</div>";
                    }
                }

            } elseif ($_GET["op"] == "alt") {
                //Se operação = alterar 
                
                $produtoAlteracao = array();
            
                //Chamo a função para pesquisa específica pelo ID
                $produtoAlteracao = $produto->listar();
                
                
                if(is_array($produtoAlteracao)){
                    $produtoAlteracao = $produtoAlteracao[0];//Pega o primeiro cliente do array 
                    // O $clienteAlteracao será utilizado no formulário para preencher os dados do cliente 
                    // que foram pesquisados no banco de dados
                    
                    
                }
            }
        }
    }  if(isset($_GET["pesquisa"])){
        $produtos = array();
        $produto = new Produto();
        $nome = $_GET["pesquisa"]; 
        $produtos = $produto->listar($nome);
                
    }  
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Produtos</title>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="js/script.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript">
            
            
            function validar() {
                var nome = document.getElementById("nome");
                var serie = document.getElementById("serie");
                
                if (nome.value == "") {
                    alert('Preencha o campo com o nome');
                    nome.focus();
                    return false;
                }else if (nome.value.length < 5) {
                    alert('Digite o nome completo');
                    nome.focus();
                    return false;
                }
                
                
                if (serie.value == "") {
                    alert('Preencha o campo com o N° de Série');
                    nome.focus();
                    return false;
                }else if (serie.value.length < 5) {
                    alert('Digite o N° de série completo');
                    nome.focus();
                    return false;
                }
                return true;
            }
            
            
        </script>
        
    </head>
    <body>
        <h1>Cadastro de Clientes</h1>
        <div id="cadastro" name="cadastro">
            <?php 
                //Imprime as mensagens
                if(isset($msg)){ 
                    echo "<div id='msg' name='msg' class='sucesso'>".$msg."</div>"; 
                    $msg=null;
                }
                if(isset($erro)){ 
                    echo "<div id='msg' name='erro' class='erro'>".$erro."</div>"; 
                    $msg=null;
                }                
           ?>             
            
        <form name="formulario" action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
            <input type="hidden" name="id" id="id" value="<?= isset($produtoAlteracao) ? $produtoAlteracao->getId() : "";?>" />
            <fieldset>
                <div class="campo">
                    
                    <label for="nome">Nome *:</label>
                    <input type="text" name="nome" id="nome" placeholder="Informe seu nome" value="<?= isset($produtoAlteracao) ? $produtoAlteracao->getNome() : "";?>"/>
                </div>
                <div class="campo">
                    <label for="serie">N° de série:</label>
                    <input type="text" name="serie" id="cpf" placeholder="Informe seu N° de série" value="<?= isset($produtoAlteracao) ? $produtoAlteracao->getSerie() : "";?>"" />
                </div>
                <div class="campo">
                    
                
                <button  class="botao" type="submit" name="cadastrar" id="cadastrar" onclick="return validar()">Cadastrar</button>
            </fieldset>
        </form>
            
        </div>
        <div id="pesquisar" name="pesquisar">
            <form action="<?=$_SERVER["PHP_SELF"]?>" id="searchthis" method="get" style="display: inline;">
                <input type="text" name="pesquisa" id="pesquisa" placeholder="Informe o nome do produto que você está procurando ..."  /> 
                <button id="pesquisafsm-botao" name="pesquisafsm-botao" type="submit">Pesquisar</button> 
            </form>
        </div>
        <div id="listagem" name="listagem">
        
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>N° de Série</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(!empty($produtos)){
                        foreach ($produtos as $pro) {
                            echo "<tr>
                                    <td>".$pro->getId()."</td>
                                    <td>".$pro->getNome()."</td>
                                    <td>".$pro->getSerie()."</td>
                                    <td><a  href=".$_SERVER['PHP_SELF']."?op=alt&id=".$pro->getId()."><img src='img/edit.png' width='20px' /></a>
                                        <a  href='#' onclick=javascript:excluirRegistro(".trim($pro->getId()).",'".$_SERVER['PHP_SELF']."')><img width='20px' src='img/cancel.png' /></a></td>
                                </tr>" ;  
                        }
                    }
               ?>
            </tbody>
        </table>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html>

<?php
require_once("./Sessao.php");
$uri_origem = "index.php";
?>

<form action="" method="POST">
    <label>Usuário
        <input type="text" name="id_usuario">
    </label>
    <label>Senha
        <input type="password" name="senha">
    </label>

    <input type="submit" value="Entrar">
</form>

<?php 
    require_once("./Autenticador.php");

    if (isset($_POST["id_usuario"]) && isset($_POST["senha"])){

        $idUsuario = $_POST["id_usuario"];
        $senha = $_POST["senha"];
        $aut = new Autenticador();
        $ret = $aut->autenticar($idUsuario, $senha);
        if($ret->getTemErros()){
            foreach ($ret->getErros() as $erro) {
                echo "$erro <br>";
            }
        }
        else{
            $sessao = Sessao::getInstance();
            $sessao->salvar("AUTENTICACAO", $ret->getAutenticacao());
            $uri_origem =  $_SESSION['pagina_atual'];
            header("location: $uri_origem");
        }
    }
?>
</html>

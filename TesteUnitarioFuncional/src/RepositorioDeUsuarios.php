<?php 
require_once("./Sessao.php");
require_once("Usuario.php");

class RepositorioDeUsuarios{
    private $usuarios;

    public function RepositorioDeUsuarios()
    {
        $this->carregarVetor();
    }

    private function carregarVetor()
    {
        $sessao = Sessao::getInstance();

        if ($sessao->existe("VETOR_USUARIOS_PARA_TESTES"))
        {
            $this->usuarios = $sessao->recuperar("VETOR_USUARIOS_PARA_TESTES");
        }
        else{
            $this->usuarios = array();
            $user = new Usuario("Administrador", "admin", "admin");
            $this->usuarios[] = $user;
        }
    }
    private function salvarAlteracoesDoVetor()
    {
        Sessao::getInstance()->salvar("VETOR_USUARIOS_PARA_TESTES",$this->usuarios);
    }

    public function adicionar($usuario)
    {
        $this->usuarios[] = $usuario;
        $this->salvarAlteracoesDoVetor();
    }
    public function atualizar( $usuario)
    {
        # code...
    }
    public function remover(  $usuario)
    {
        # code...
    }
    public function buscarTodos()
    {
        return $this->usuarios;
    }
    public function buscarPorIdUsuario($idUsuario)
    {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getIdUsuario() == $idUsuario)
            {
                return $usuario;
            }
        }
        return null;
    }
}
?>
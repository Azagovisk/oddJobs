<?php
class Usuario{
    private $nome;
    private $idUsuario;
    private $senha;

    public function Usuario ($nome, $idUsuario, $senha){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->idUsuario = $idUsuario;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function validarSenha($senha){
        return $this->senha == $senha;
    }
}
?>
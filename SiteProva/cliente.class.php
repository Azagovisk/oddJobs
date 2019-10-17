<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author Sammy Guergachi <sguergachi at gmail.com>
 * 
 */
/*
 * 
 *  No cadastro de clientes, devemos informar identificador, nome, endereço, data de
 *  nascimento, senha, email, se está ativo.
 *  ○ Assim, devemos implementar uma tela para registrar as informações e outra para visualizar.
 */
class Cliente {
    private $ativo;
    private $identificador;
    private $nome;
    private $endereco;
    private $datanascimento;
    private $senha;
    private $email;
    
    
    //Ativo
    function getAtivo() {
        return $this->ativo;
    }
    
    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

      
    //Identificador
    function getIdentificador() {
        return $this->identificador;
    }
    function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }
    
    //Nome
    function getNome() {
        return $this->nome;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
   
    
    //Senha
    function getSenha() {
        return $this->senha;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }

    
    //Endereço
    function getEndereco() {
        return $this->endereco;
    }
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    
    //Data de Nascimento
    function getDatanascimento() {
        return $this->datanascimento;
    }
    function setDatanascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    
    //Email
    function getEmail() {
        return $this->email;
    }
     function setEmail($email) {
        $this->email = $email;
     }    

}

<?php
require_once ("../functions.php");
class  Testes{
    public function testar(){
        $this->testarAdicaoSemNumeroRegistro();
        $this->testarAdicaoSemNome();
        $this->testarAdicaoNumeroRegistroPequeno();
        $this->testarAdicaoNumeroRegistroMenorQue10();
        $this->testarAdicaoNumeroRegistroIgualA10();
        $this->testarAdicaoNumeroRegistroMaiorQue10();
    }

    private function testarAdicaoSemNumeroRegistro(){
        $p = new Pessoa("Nome da Pessoa", '', "Email");
        $p->nome = "Nome da pessoa";
        $retorno = $p->add();

        if ($retorno){
            echo "Erro: Pessoa adicionada <b>sem Número de regitro</b><br>";
        }
    }
    private function testarAdicaoSemNome(){
        $p = new Pessoa("", '111115', "Email");
        $retorno = $p->add();

        if ($retorno){
            echo "Erro: Pessoa adicionada <b>sem Nome</b><br>";
        }
    }

    private function testarAdicaoNumeroRegistroPequeno(){
        $p = new Pessoa("Nome da Pessoa", '123', "Email");
        $retorno = $p->add();

        if ($retorno){
            echo "Erro: Pessoa adicionada com Número de Registro <b>menor que 6 dígitos</b><br>";
        }
    }

    private function testarAdicaoNumeroRegistroMenorQue10(){
        $p = new Pessoa("Nome da Pessoa", '111116', "Email");
        $retorno = $p->add();

        if ($retorno){
            echo "Erro: Pessoa adicionada com Número de Registro cujo número final não é a soma dos anteriores <b>(Sendo que os anteriores somam menos que 10)</b><br>";
        }
    }

    private function testarAdicaoNumeroRegistroIgualA10(){
        $p = new Pessoa("Nome da Pessoa", '123221', "Email");
        $retorno = $p->add();

        if ($retorno){
            echo "Erro: Pessoa adicionada com Número de Registro cujo número final não é a soma dos anteriores <b>(Sendo que os anteriores somam igual que 10)</b><br>";
        }
    }

    private function testarAdicaoNumeroRegistroMaiorQue10(){
        $p = new Pessoa("Nome da Pessoa", '554218', "Email");
        $retorno = $p->add();

        if ($retorno){
            echo "Erro: Pessoa adicionada com Número de Registro cujo número final não é a soma dos anteriores <b>(Sendo que os anteriores somam mais que 10)</b><br>";
        }
    }
}
?>
<?php
require_once ("../src/RepositorioDeProdutos.php");
class  RepositorioDeProdutosTeste{
    public function testar(){
        $this->testarAdicaoSemNumeroRegistro();
        $this->testarAdicaoSemDescricao();
        $this->testarAdicaoNumeroRegistroPequeno();
        $this->testarAdicaoNumeroRegistroIgual();
        $this->testarPesquisaPorDescricao();
    }

    private function testarAdicaoSemNumeroRegistro(){
        $p = new Produto();
        $p->descricao = "Nome do Produto";
        $rep = new RepositorioDeProdutos();
        $retorno = $rep->adicionar($p);

        if ($retorno){
            echo "Erro: Produto adicionado <b>sem Número de regitro</b><br>";
        }
    }
    private function testarAdicaoSemDescricao(){
        $p = new Produto();
        $p->numeroRegistro="123";

        $rep = new RepositorioDeProdutos();
        $retorno = $rep->adicionar($p);

        if ($retorno){
            echo "Erro: Produto adicionado <b>sem Descrição</b><br>";
        }
    }

    private function testarAdicaoNumeroRegistroPequeno(){
        $p = new Produto();
        $p->numeroRegistro = "123";
        $p->descricao = "Nome do Produto";
        $rep = new RepositorioDeProdutos();
        $retorno = $rep->adicionar($p);

        if ($retorno){
            echo "Erro: Produto adicionado com Número de Registro <b>menor que 6 dígitos</b><br>";
        }
    }

    private function testarAdicaoNumeroRegistroIgual(){
    $p = new Produto();
    $p->numeroRegistro = "123456";
    $p->descricao = "Nome do Produto";
    $rep = new RepositorioDeProdutos();
    $rep->adicionar($p);

    $p2 = new Produto();
    $p2->numeroRegistro = "123456";
    $p2->descricao = "Nome do Produto";
    $rep = new RepositorioDeProdutos();
    $retorno = $rep->adicionar($p);

        if ($retorno){
            echo "Erro: Produto adicionado com Número de Registro <b>repetido</b><br>";
        }
    }

    private function testarPesquisaPorDescricao(){
        $p = new Produto();
        $p->numeroRegistro = "111111";
        $p->descricao = "Nome do Produto";
        $rep = new RepositorioDeProdutos();
        $retorno = $rep->buscarPorDescricao($p->descricao);

        if($retorno == null){
            echo "Erro: Produto <b>Não encontrado</b><br>";
        }
    }
}
?>
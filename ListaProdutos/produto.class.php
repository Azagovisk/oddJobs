<?php

class Produto {
   private $nome;
   private $preco;
   private $desconto;
   private $foto;
   function __construct($nome, $preco, $foto, $desconto=0){
       $this->nome = $nome;
       $this->preco =$preco;
       $this->foto=$foto;
       $this->desconto= $desconto;
   }

   public function getNome() {
       return $this->nome;
   }

   public function getPreco() {
       return $this->preco;
   }

   public function setNome($nome) {
       $this->nome = $nome;
   }

   public function setPreco($preco) {
       $this->preco = $preco;
   } 
   
   public function setDesconto($desconto) {
       $this->desconto = $desconto;
   } 
   
   public function getDesconto(){
       return $this->desconto;
   } 
   
   public function getValorComDesconto(){
       if($this->desconto != 0){
           $valor= ($this->preco) - (($this->preco * $this->desconto)/100);
           return "<span style='text-decoration: line-through;'>R$'". $this->preco. "</span> &nbsp R$".$valor;
       } else{
           return "R$". $this->preco;
       }
   }
   
   public function getValorCobrado(){
       if($this->desconto != 0){
           $valor= $this->preco - (($this->preco * $this->desconto)/100);
           return $valor;
       } else{
           return $this->preco;
       }
   }
   
   public function setFoto($foto){
       $this->foto =$foto;
   }
   
   public function getFoto(){
       return $this->foto;
   }
}

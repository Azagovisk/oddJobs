<?php

class Produto {
 private $nome;
 private $preco;
 private $desconto=0;
 private $foto;
 

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
         $valor= $this->preco - (($this->preco * $this->desconto)/100);
         return round($this->preco,2). "riscado &nbsp R$". round($valor,2);
     } else{
         return round($this->preco, 2);
     }
 }
 
 public function getValorCobrado(){
   if($this->desconto != 0)
         return $this->preco - (($this->preco * $this->desconto)/100);
     
   return $this->preco;
 }
 
 public function setFoto($foto){
     $this->foto =$foto;
 }
 
 public function getFoto(){
     return $this->foto;
 }
}
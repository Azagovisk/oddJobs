

<?php

abstract class publicacao {
      private $codigo;
      private $assunto;
      private $titulo;
      private $editora;
      private $ano;
      
      
      function getCodigo() {
          return $this->codigo;
      }

      function getAssunto() {
          return $this->assunto;
      }

      function getTitulo() {
          return $this->titulo;
      }

      function getEditora() {
          return $this->editora;
      }

      function getAno() {
          return $this->ano;
      }

      function setCodigo($codigo) {
          $this->codigo = $codigo;
      }

      function setAssunto($assunto) {
          $this->assunto = $assunto;
      }

      function setTitulo($titulo) {
          $this->titulo = $titulo;
      }

      function setEditora($editora) {
          $this->editora = $editora;
      }

      function setAno($ano) {
          $this->ano = $ano;
      }


}

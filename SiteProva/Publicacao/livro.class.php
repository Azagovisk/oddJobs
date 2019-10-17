

<?php

include_once 'publicacao.class.php';
class Livro extends publicacao {
    private $edicao;
    private $isbn;
    private $autor;
    
    function __construct($edicao, $isbn, $autor){
        $this->edicao = $edicao;
        $this->isbn = $isbn;
        $this->autor = $autor;
    }

    function getEdicao() {
        return $this->edicao;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getAutor() {
        return $this->autor;
    }

    function setEdicao($edicao) {
        $this->edicao = $edicao;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }


}

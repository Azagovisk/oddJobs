

<?php

include_once 'artigo.class.php';
class revista extends artigo{
    private $colecao;
    
    function getColecao() {
        return $this->colecao;
    }

    function setColecao($colecao) {
        $this->colecao = $colecao;
    }


    
}

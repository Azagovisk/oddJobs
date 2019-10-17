

<?php

class menu {
    private $dia;
    private $turno;
    private $texto;
    
    function getDia() {
        return $this->dia;
    }

    function getTurno() {
        return $this->turno;
    }

    function getTexto() {
        return $this->texto;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

    function setTurno($turno) {
        $this->turno = $turno;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }


    
}

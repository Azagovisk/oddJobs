<?php

include_once 'Produto.php';

class Carrinho {

    private $produtos;
    private $quantia;

    function addProduto(Produto $p, $q) {
        $this->produtos[] = $p;
        $this->quantia[] = $q;
    }
    
    function getCarrinho(){
        return [$this->produtos, $this->quantia];
    }
/**
    function mostraCarrinho() {
        $html = "<table border='2'>"
                . "<th align='center' >Nome</th><th align='center'>Quantidade</th><th align='center'>Valor Unitário</th><th>Valor Total</th>";
        
        $total = 0;
        for ($i = 0; $i < count($this->produtos); $i++) {
            $html .= "<tr><td align='center'>" . $this->produtos[$i]->getNome() . " </td>"
                    . "<td align='center'>" . $this->quantia[$i] . " </td>"
                    . "<td align='center'>" . $this->produtos[$i]->getValorCobrado() . " </td>"               
                    . "<td align='center'>" . $this->produtos[$i]->getValorCobrado() * $this->quantia[$i] . " </td>"
                    . "</tr>";
            $total += $this->produtos[$i]->getPreco() * $this->quantia[$i];
        }
        $html .= "<th>Total: </th><td colspan='3'>" . $total . " reais.</td>";
        $html .= "<tr><th>Parcelas: </th><td align='right' colspan='3'>  6x: ".  round($total/6,2)."<br>"  ;
        $html .= "3x: " . round($total/3,2)."<br>" ;
        $html .= " 1x: ".  round($total,2)  ."</td></tr>";

        return $html;
    }*/

}

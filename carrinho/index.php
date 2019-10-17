<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'produto.php';
        include_once 'carrinho.php';

        $p1 = new Produto();
        $p1->setNome("A");
        $p1->setPreco(10);
        $p1->setDesconto(10);

        $p2 = new Produto();
        $p2->setNome("B");
        $p2->setPreco(20.50);

        $c = new Carrinho();
        $c->addProduto($p1, 2);
        $c->addProduto($p2, 3);
        
        
        $relacao = $c->getCarrinho();
        $produtos = $relacao[0];
        $quantia = $relacao[1];
        
        $html = "<table border='2'>"
                . "<th align='center' >Nome</th><th align='center'>Quantidade</th><th align='center'>Valor Unitário</th><th>Valor Total</th>";
        
        $total = 0;
        for ($i = 0; $i < count($produtos); $i++) {
            $html .= "<tr><td align='center'>" . $produtos[$i]->getNome() . " </td>"
                    . "<td align='center'>" . $quantia[$i] . " </td>"
                    . "<td align='center'>" . $produtos[$i]->getValorCobrado() . " </td>"               
                    . "<td align='center'>" . $produtos[$i]->getValorCobrado() * $quantia[$i] . " </td>"
                    . "</tr>";
            $total += $produtos[$i]->getValorCobrado() * $quantia[$i];
        }
        $html .= "<th>Total: </th><td colspan='3'>" . $total . " reais.</td>";
        $html .= "<tr><th>Parcelas: </th><td align='right' colspan='3'>  6x: ".  round($total/6,2)."<br>"  ;
        $html .= "3x: " . round($total/3,2)."<br>" ;
        $html .= " 1x: ".  round($total,2)  ."</td></tr>";

        print $html;

        ?>
    </body>
</html>
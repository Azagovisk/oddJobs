<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="pricing-table" class="clear">

            <?php
            include_once 'produto.class.php';
            $p1 = new Produto("Notebook", 2000, "1.png", 10);
            $p2 = new Produto("iPhone", 3000, "2.png", 15);
            $p3 = new Produto("PS4", 3000, "3.png", 10);
            $p4 = new Produto("Computador", 3500, "4.png");
            $produtos = [];
            $produtos[] = $p1;
            $produtos[] = $p2;
            $produtos[] = $p3;
            $produtos[] = $p4;

            foreach ($produtos as $key) {

                $html = "<div class='plan'>
           <h3>{$key->getNome()}<span><img src='imagens/{$key->getFoto()}' height='50px' width='50px'></img></span></h3>
           <a class='signup' href=''>Comprar</a>         
           <ul>
               <li><b>" . $key->getValorComDesconto() . "</b></li>		
           </ul> 
            </div>";
                echo $html;
            }
            ?>



        </div>
    </body>

</html>
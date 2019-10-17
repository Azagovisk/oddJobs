<?php
            session_start();
   $n =  rand ( 1 ,  999 );
   
   switch($n){
       
       case $n < 10: $n = "00"."$n";
               break;
       case $n < 100: $n = "0"."$n";
               break;  
       
   }
   
      header('Content-type: image/png');  
            $imagem = imagecreate(50, 20); 
            $red = imagecolorallocate($imagem, 255, 0, 0);
            $blue = imagecolorallocate($imagem,  0, 0, 255);
            $black = imagecolorallocate($imagem,  0, 0, 0);
            imagestring($imagem, 5, 10, 4, $n, $black);
            $_SESSION['imagem'] = $n;
            imagepng($imagem); 
?>
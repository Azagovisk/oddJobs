<?php

    $filename = "jogo.txt";
    $handle = fopen($filename, "r");
    $conteudo = fread($handle, filesize($filename));
    echo $conteudo . "<br/>";
    fclose($handle);

?>
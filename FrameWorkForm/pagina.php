
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if($_POST){
                if(isset($_POST['Nome'])){$nome = $_POST['Nome'];} else{header("location: index.php");}
                if(isset($_POST['Senha'])){$senha = $_POST['Senha'];}else{header("location: index.php");}
                if(isset($_POST['texto'])){$texto = $_POST['texto'];}else{header("location: index.php");}
                if(isset($_POST['Estados'])){$estado = $_POST['Estados'];}else{header("location: index.php");}
                echo $nome . '<br/>';
                echo $senha . '<br/>';
                if(isset($_POST['sexo'])){$sexo = $_POST['sexo'];}else{header("location: index.php");}
                if($sexo=='m'){
                    echo "Masculino <br/>";
                }elseif($sexo == 'f'){
                    echo "Feminino <br/>";
                } 
                echo $estado. "<br/>";
                echo $texto . "<br/>";
                if(isset($_POST['checkbox'])){
                    echo "Deseja receber e-mails <br/>";
                }else{
                    echo "Não deseja receber e-mails <br/>";
                }
                
               
            }
        ?>
    </body>
</html>



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FrameWork Form</title>

    </head>
    <body>
        <?php
require_once "Formulario.class.php";
require_once "Text.class.php";
require_once "Senha.class.php";
require_once "Checkbox.class.php";
require_once "Radio.class.php";
require_once "Textarea.class.php";
$campo1 = new Select('RJ', 'Estados');
$campo1->addOption('RS', 'Rio Grande do Sul');
$campo1->addOption('SC', 'Santa Catarina');

$campo2= new Text('Nome','Nome', 'nome');
$senha = new Senha('Senha','Senha', 'senha');
$radio = new Radio('sexo', 'sexo', 'idR');
$radio-> addOption('m', 'Masculino', 'checked');
$radio->addOption('f', 'Feminino');
$textarea = new Textarea('texto', 'Texto:', 'id', '50', '4');

$check = new Checkbox("checkbox","Deseja receber e-mails?", "idC", "checked");


$f = new Formulario('pagina.php', 'POST');
$f->addCampo($campo2);
$f->addCampo($campo1);
$f->addCampo($senha);
$f->addCampo($radio);
$f->addCampo($textarea);
$f->addCampo($check);
print $f->getHTML();

?>
    </body>
</html>

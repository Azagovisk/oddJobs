
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php

$filename = "menu.txt";
if(file_exists($filename)){
$aux=0;
$handle = fopen ($filename, "r");
while (!feof ($handle)) {
	if($aux==3){
		$aux=0;
		echo "<br/>";
	}else{
		//LÊ UMA LINHA DO ARQUIVO
  $linha = fgets($handle,4096);
  //IMPRIME NA TELA O RESULTADO
  echo $linha."<br>";
  $aux++;
	}
}
fclose ($handle);

}else{
	header("location: acesso.php");
}
echo "<a href='acesso.php'><button>Voltar</button></a>"
?>

</body>
</html>

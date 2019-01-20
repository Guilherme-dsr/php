<!DOCTYPE html>
<html>
<head>
	<title>Projeto-PHP-01</title>
	<meta charset="utf-8">
</head>
<body bgcolor=#CEE3F6>
<h1><center><font size="6" color="blue">Estudando PHP:</font></center></h1>
<center>
<?php 
$ano = $_GET["ano"];
$i = 2019 - $ano;

echo "você pode: ";

if ($i < 16) {
	$v = "você não pode votar!";
}
elseif (($i >= 16 && $i<18) || ($i > 65)){
	$v = "você so vota se quiser!";
}
else{
	$v = " você é obrigado a votar!";
 }

echo "com essa idade $v";

?>
</center>
</body>
</html>

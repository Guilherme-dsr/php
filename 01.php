<!DOCTYPE html>
<html>
<head>
	<title>Estud_Tudo_Exs</title>
	<meta charset="utf-8">
</head>
<body>
<?php
// -----------------Ex1:--------------------- //

// define("constante_alo", "olá mundo");
// echo constante_alo;

// -----------------Ex2:--------------------- //

 $nome = $_POST['nome'];
 $sal_f = $_POST['sal_fixo'];
 $tot = $_POST['tot'];
 $Por = ($tot * 15)/100;

 echo '<center>Nome: '.$nome.'<br><center>';
 echo '<center>Salário fixo: R$'.$sal_f.'<br><center>';
 echo '<center>Salário final: R$'.($sal_f+$Por);
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Estud_Tudo_Exs</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$p = $_POST['kp'];
	$c = $_POST['d']; 
	$med = ($p / $c);
	echo "<center>Média: ".$med;
?>
</body>
</html>
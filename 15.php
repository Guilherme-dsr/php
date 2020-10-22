<?php
	$a = $_POST['a'];
	$p = $_POST['p'];
	$imc = $p/($a * $a);
	echo "<center><font color ='red'>$imc</font></center>";
	$n = array(
	"nome" => "guilherme ",
	"idade" => 15 ,
	"peso" => 57.5 );
foreach ($n as $camp => $valor) {
 	echo "o campo $camp possui o conteudo $valor ";
 	}
?>
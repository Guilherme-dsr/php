<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$m = ($n1 + $n2 + $n3)/3;

	if ($m >= 6) {
		echo "<font color ='gren' size = '5' ><center> Aprovado(a)! </center></font>";
	}
	else{
		echo "<font color ='red' size = '5' ><center> Reprovado(a)! </center></font>";
	}
?>
<?php 
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$op = $_POST["op"];

foreach($op as $_valor){

	if ($_valor == '+' ) {
		echo "<center>$n1 + $n2 = ".($n1+$n2)."</center><br>";
	}

	elseif ($_valor == '-' ) {
    	echo "<center>$n1 - $n2 = ".($n1-$n2)."</center><br>";
	}

	elseif ($_valor == 'x' ) {
    	echo "<center>$n1 x $n2 = ".($n1*$n2)."</center><br>";
	}

	elseif ($_valor == '/' ) {
    	echo "<center>$n1 / $n2 = ".($n1/$n2)."</center>";
	}
	
	else{
		echo "<font size = '10' color= 'red'><center> ERRO! <center></font> ";
	}
}
?>
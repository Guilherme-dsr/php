<?php 
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];
switch ($op) {
		case '+':
			echo "<center>$n1 + $n2 = ".($n1+$n2)."</center>";
			break;


		case '-':
			echo "<center>$n1 - $n2 = ".($n1-$n2)."</center>";
			break;

		case 'x':
			echo "<center>$n1 x $n2 = ".($n1*$n2)."</center>";
			break;

		case '/':
			echo "<center>$n1 / $n2 = ".($n1/$n2)."</center>";
			break;

		default:
			echo "<font size = '10' color= 'red'><center> ERRO! <center></font> ";
			break;
		}


?>
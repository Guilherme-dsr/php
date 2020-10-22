<?php
 $n1 = $_POST['n1'];
 $n2 = $_POST['n2'];
 $op = $_POST['op'];

 switch ($op) {
 	case '+':
			echo "$n1 + $n2 = ".($n1+$n2)."<br>";
 		break;
 	case 'x':
 			echo "$n1 x $n2 = ".($n1*$n2)."<br>";
 		break;
 	case '-':
 			 echo "$n1 - $n2 = ".($n1-$n2)."<br>";
 		break;
 	case '/':
 			 echo "$n1 / $n2 = ".($n1/$n2);
 		break;
 		default: echo "ERRO!";
 }


 


?>
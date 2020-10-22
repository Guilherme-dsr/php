<?php
	$n = $_POST['n'];

	if($n > 50){
		echo "O quadrado do numero é: ".($n * $n);
	}
	else{
		echo $n;
	}
?>
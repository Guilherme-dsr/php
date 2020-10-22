<?php
	$n = $_POST['n'];
	$mod = $n % 2;

	if($mod == 0){
		echo "<center>Par! $n<center>";
	}
?>
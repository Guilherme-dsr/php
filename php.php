<?php 
$nome = $_POST["nome"];
$data = $_POST["data"];
$option = $_POST["op"];

echo "<center><b>Nome: $nome </b><br>";
echo " <b> Data De Nascimento: $data </b><br>";

foreach($option as $_valor){
if ($_valor == "p") {
	$np1 = $_POST['np1'];
	$np2 = $_POST['np2'];
	$np3 = $_POST['np3'];
	$np4 = $_POST['np4'];

	$medp = ($np1 + $np2 + $np3 + $np4)/4;
	if ($medp >= 6) {
	echo "<p><font color='green'> Aprovado em Português! Sua média é: $medp </font></p>";	
	}
	else{
	echo "<p><font color='red'> Reprovado em Português! Sua média é: $medp </font></p>";		
	}
	
 }
 elseif ($_valor == "m") {
	$nm1 = $_POST['nm1'];
	$nm2 = $_POST['nm2'];
	$nm3 = $_POST['nm3'];
	$nm4 = $_POST['nm4'];
	$medm = ($nm1 + $nm2 + $nm3 + $nm4)/4;
	if ($medm >= 6) {
	echo "<p><font color='green'> Aprovado em Matemática! Sua média é: $medm </font></p>";	
	}
	else{
	echo "<p><font color='red'> Reprovado em Matemática! Sua média é: $medm </font></p>";		
	}
 }
 elseif ($_valor == "b") {
 	$nb1 = $_POST['n1b'];
	$nb2 = $_POST['n2b'];
	$nb3 = $_POST['n3b'];
	$nb4 = $_POST['n4b'];
	$medb = ($nb1 + $nb2 + $nb3 + $nb4)/4;
	if ($medb >= 6) {
	echo "<p><font color='green'> Aprovado em Física! Sua média é: $medb </font></p>";	
	}
	else{
	echo "<p><font color='red'> Reprovado em Física! Sua média é: $medb </font></p>";		
	}
 }
 elseif ($_valor == "f") {
	$nf1 = $_POST['n1f'];
	$nf2 = $_POST['n2f'];
	$nf3 = $_POST['n3f'];
	$nf4 = $_POST['n4f'];
	$medf = ($nf1 + $nf2 + $nf3 + $nf4)/4;
	if ($medf >= 6) {
	echo "<p><font color='green'> Aprovado em Física! Sua média é: $medf </font></p>";	
	}
	else{
	echo "<p><font color='red'> Reprovado em Física! Sua média é: $medf </font></p>";		
	}
 }
  elseif ($_valor == "q") {
	$nq1 = $_POST['n1q'];
	$nq2 = $_POST['n2q'];
	$nq3 = $_POST['n3q'];
	$nq4 = $_POST['n4q'];
	$medq = ($nq1 + $nq2 + $nq3 + $nq4)/4;
	if ($medq >= 6) {
	echo "<p><font color='green'> Aprovado em Química! Sua média é: $medq </font></p>";	
	}
	else{
	echo "<p><font color='red'> Reprovado em Química! Sua média é: $medq </font></p>";		
}
 }
 else{
 	echo "<p> ERRO! </p> ";
}

}
echo "</center>";

 ?>
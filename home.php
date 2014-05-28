<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Problema 1</title>
<style>
.fizz{
	color:#09F;
}

.buzz{
	color:#F63;
}

.fizzBuzz{
	color:#696;
}
</style>
</head>

<body>
<?php
	include("cabezera.php");
?>
<p>Escribe un programa que cuente hasta 100 e imprima Fizz si el contador es par, Buzz si el contador es impar y FizzBuzz si es impar y divisible entre 7</p>

<?php

echo "<ul>";
for($i = 1; $i <= 100; $i++){
	
	$num = $i / 2;
	
	$par = $num - (int)$num;
	
	if($par == 0){
		echo '<li class="fizz">'.$i.': FIzz</li>';
	}else{
		$num = $i / 7;
		
		$div7 = $num - (int)$num;
		
		if($div7 == 0)
			echo '<li class="fizzBuzz">'.$i.': FizzBuzz</li>';
		else
			echo '<li class="buzz">'.$i.': Buzz</li>';
	}
}

echo "</ul>";

?>

</body>
</html>
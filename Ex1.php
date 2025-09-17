<?php 


$num1 = 5;
$num3 = 0;
$cont = 0;
$num2 = 0;
while($cont	 < 5 || $num1 == 0 || $num2 == 0){
	$cont++;
	$num2 = 3;
	if ($num1 > $num2) {
		$num3 = $num1;
	} elseif ($num2 > $num1){
		$num3 = $num2;
	} else{
		return;
	}
}

	echo "O maior numero é $num3";

 ?>
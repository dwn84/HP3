<?php

	$edad = 19;
	if( $edad >= 19){
		echo "Eres mayor de edad!";
	}else{
		echo "Eres menor de edad!";
	}
	
	$i=rand(0,2);

	if ($i == 0) {
		echo "i es igual a 0";
	} elseif ($i == 1) {
		echo "i es igual a 1";
	} elseif ($i == 2) {
		echo "i es igual a 2";
	}
	//los condicionales son equivalentes a
	switch ($i) {
		case 0:
			echo "i es igual a 0";
			break;
		case 1:
			echo "i es igual a 1";
			break;
		case 2:
			echo "i es igual a 2";
			break;
	}
    $i="pastel";
	switch ($i) {
		case "manzana":
			echo "i es una manzana";
			break;
		case "barra":
			echo "i es una barra";
			break;
		case "pastel":
			echo "i es un pastel";
			break;
	}

?>


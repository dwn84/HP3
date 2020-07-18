<?php

	for($f=1;$f<=100;$f++)
	{
	  echo $f;
	  echo "<br>";
	}

	$valor=rand(1,100);
	$inicio=1;
	while($inicio<=$valor)
	{
	  echo $inicio;
	  echo "<br>";
	  $inicio++;
	}

	//Mostramos los números de los días del 1 a la fecha actual;
	$dia=date("d");
	$inicio=1;
	while($inicio<=$dia)
	{
	  echo $inicio."<br>";
	  $inicio++;
	}


	echo "Tabla del 2 con el for";
	echo "<br>";
	for($f=2;$f<=20;$f=$f+2)
	{
		echo $f;
		echo "-";
	}
	echo "<br>";
	echo "Tabla del 2 con el while";
	echo "<br>";
	$f=2;
	while ($f<=20)
	{
		echo $f;
		echo "-";
		$f=$f+2;
	}
	echo "<br>";
	echo "Tabla del 2 con el do/while";
	echo "<br>";
	$f=2;
	do {
		echo $f;
		echo "-";
		$f=$f+2;	
	} while ($f<=20);


?>


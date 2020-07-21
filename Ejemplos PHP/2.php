<html>
<head></head>
<body>
<?php
	echo "Hola Mundo";
	echo "<br>";
	echo "<h1>Contenido de variables</h1>";
	$dia = 24;  //Se declara una variable de tipo entero/integer.
	$nMoneda = 758.43; //Se declara una variable de tipo real/double.
	$name_user = "pepe"; // variable de tipo carácter/string. 
	$bandera = true; //Se declara una variable lógico/boolean.
	//Array 
	$array0 = array(1,2,3,4,9,12,6,8,11);
	echo $array0[5];
	$array = array(
		"foo" => "bar",
		"bar" => "foo",
	);//arreglo asociativo
	echo $array["foo"];
	$dias[0]=11;
	$dias[1]=22;
	//se puede llegar a obviar el indice
	$dias[]=33;
	$dias[]=44;
	$dias[]=55;
	echo count($dias);
	//variable vector/arreglo/array sin definición de índice
	$baz = array("foo", "bar", "hello", "world");
	// variable vector/arreglo/array con definición de índice
	// array asociativo
	$datos = array(
		"name" => "Pepito",
		"lastname" => "Perez",
	);
	//otra forma
	$registro['tel']="4441213";
	$registro['name']="Yayita Gomez";
	$registro['address']="Carrera 665";
	// variable vector/arreglo/array compuesto.

	$cliente = 

	array(
		"name" => "Juan",
		"last_Name" => "Ochoa",
		"Contacto" => array(
						"telefono" => array(
											"fijo" => "2692121",
											"movil" => "3012129988"
										)
						),
		"Saldo"	=> 850000,	
		"Porcentaje"=> 7.52,
		"activo"=> false,
		);
	echo "Variable entera: ";
	echo $dia;
	echo "<br><br>";
	echo "Variable double: ";
	echo $nMoneda;
	echo "<br><br>";
	echo "Variable string: ";
	echo $name_user;
	echo "<br><br>";
	echo "Suma de variables: ";
	echo $dia + $nMoneda;//operacion entre variables
	echo "<br><br>";
	echo "Variable boolean: ";
	echo $bandera;
	echo "<br><br>";
	echo "Contenido de todo el arreglo 'baz': ";
//no es posible mostrar todo un arreglo con echo, en su lugar se usa var_dump
	echo $baz;
	var_dump($baz);
	echo "<br><br>";
	echo "Contenido del arreglo en la posicion 2: ";
	echo $baz[2];//la primera posición del arreglo es 0
	echo "<br><br>";
	echo "Contenido de todo el arreglo 'datos': ";
	var_dump($datos);
	echo "<br><br>";
	echo "Contenido de todo el arreglo 'cliente': ";
	var_dump($cliente);
	echo "<br><br>";
	echo "Contenido especifico del arreglo caso 1: ";
	var_dump($cliente["last_Name"]);
	echo "<br><br>";
	echo "Contenido especifico del arreglo caso 2: ";
	var_dump($cliente["Contacto"]["telefono"]["movil"]);
	echo "<br><br>";
	//asignacion y concatenación de datos
	$saldo=$cliente["Saldo"];
	$usuario = $cliente["name"]. " ".$cliente["last_Name"];
	echo "Concatenacion de datos: ";
	echo "El usuario <b>". $usuario. " </b >tiene un saldo de <b><font color=red>". $saldo;
?>
</body>
</html>

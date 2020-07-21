<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php
        echo "<h2>Experimento 1</h2>";
        echo "</br>";
        echo "<h3>Experimento 2</h3>";
        //crear un arreglo
        $array0 = array(1,2,3,4,9,12,6,8,11);
        $array0[0] = 2;
        $array0[1] = 3;
        //arreglo asociativo
        $array1 = array(
            "dato1"=>1,
            "dato2"=>2,
            "dato3"=>3,
            "dato4"=>4,
            "dato5"=>9
        );
        echo "Dato del arreglo en la posicion 1: $array0[1]" ;
        var_dump($array1);
        //herencia
        //class empleado extends persona{
        class empleado{
            public function mostrar(){
                echo "<h1 style='color:blue'>Soy un empleado</h1>";
            }
        }

        $e = new empleado();
        $e->mostrar();
        echo "comparacion de datos con nave espacial:". $array1['dato3']<=>3;

        //mostrar todo el contenido de un arreglo con un foreach
        foreach($array1 as $d)
        {
            echo "<br> $d";
        }

        

    ?>
</body>
</html>
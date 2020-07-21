<html>
<head></head>
<body>
<?php

$semana=array("lunes","martes","miércoles","jueves","viernes","sábado","domingo");
foreach ($semana as $X) 
{
echo "Dato: $X ,";

}
echo "<br>";

$capAuton=array(
"Bogota"=>"Cundinamarca",
"Medellin"=>"Antioquia",
"Cali"=>"Valle del Cauca ",
"Pereira "=>"Risaralda");
foreach ($capAuton as $k=>$v) 
{
echo "$k es la capital de $. <br/>";
}		


$cabecera=array("nombre","telefono","referencia");
$luis=array("Luis García","345395715","Trabajo");
$paco=array("Pepe Perez","325781225","Amigo");
$sofia=array("Sofía Arango","364887221","cliente");
$pilar=array("Pilar Martinez","374458115","familia");
$agenda=array($cabecera,$luis,$paco,$sofia,$pilar);
var_dump($agenda)
?>

<table border="1" width="60%" cellspacing="0">

<?php  
foreach ($agenda as $fila){
        echo "<tr>";
        foreach ($fila as $celda){
                echo "<td> $celda </td>";
                }
        echo "</tr>";
        }
?>
</table>

</body>
</html>



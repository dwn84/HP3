<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_REQUEST['txtNombre']) && !empty($_REQUEST['txtNombre'])){
            echo "Bienvenido al sistema: $_REQUEST[txtNombre]";
        }
        else{

            echo "No se ha recibido un nombre...";
        }
        var_dump($_REQUEST);

    ?>
</body>
</html>
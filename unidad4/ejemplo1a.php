<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1</title>
</head>
<body>
    <?php
    $fecha_Actual = date("l/m/Y");
    $texto ="
            <h3>NOMBRE :" .$_POST['nombre']."
            APELLIDO :" .$_POST['apellido']."</h3>
            <p> COMENTARIO : ".$_POST['msj']."</p>
            <h5> FECHA COMENTARIO".$fecha_Actual ."</h5>
    ";
    $archivo=fopen("ejemplo1.txt","a");
    fputs($archivo,$texto);
    echo "<p> DATOS ALMACENADOS</p>";
    ?>
</body>
</html>
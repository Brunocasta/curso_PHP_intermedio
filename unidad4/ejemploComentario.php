<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestra de los Comentarios</title>
</head>
<body>
    <?php
    $archivo=fopen('ejemplo1.txt','r');
    $tamanio=filesize('ejemplo1.txt');
    $contenio = fread($archivo,$tamanio);
    echo $contenio;
    fclose($archivo);
    ?>
</body>
</html>
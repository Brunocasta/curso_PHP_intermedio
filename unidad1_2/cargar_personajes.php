<?php

include("conexion.php");
$nombre_personaje ="";
$apellido_personaje ="";
$imagen_personaje ="";
$descripcion_personaje ="";

if(isset($_REQUEST["nombre"]))$nombre_personaje=$_REQUEST["nombre"];
if(isset($_REQUEST["apellido"]))$apellido_personaje=$_REQUEST["apellido"];
if(isset($_REQUEST["imagen"]))$imagen_personaje=$_REQUEST["imagen"];
if(isset($_REQUEST["descripcion"]))$descripcion_personaje=$_REQUEST["descripcion"];

$sql="INSERT into personajes (nombre,apellido,imagen,descripcion) values ( '$nombre_personaje','$apellido_personaje','$imagen_personaje','$descripcion_personaje' )";
mysqli_query($conexion_db,$sql);
echo $sql;

mysqli_close($conexion_db);

header('Location:index.php?ok=1');




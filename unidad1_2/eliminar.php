<?php
include('conexion.php');

if(isset($_REQUEST['id']))$id_personaje=$_REQUEST['id'];
$sql="DELETE from personajes where id = $id_personaje ";

mysqli_query($conexion_db,$sql);

header("Location: ver.php");
?>



<?php include("header.php");?>

<section class="contenedor_personajes">
    <?php include("conexion.php");
    $sql="SELECT * FROM personajes";
    $consulta_db=mysqli_query($conexion_db,$sql);

    while($mostar_datos=mysqli_fetch_assoc($consulta_db)){
?>
    <div>
        <h2><?php echo $mostar_datos['nombre'] ." ".$mostar_datos['apellido'];?></h2>
        <img src="imagenes/<?php echo $mostar_datos['imagen'];?>" alt="<?php echo $mostar_datos['nombre'];?>">
        <p><?php echo $mostar_datos['descripcion'];?></p>
    </div>
    <?php }?>
</section>
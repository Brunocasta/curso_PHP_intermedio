<?php include("header.php");?>

<section class="contenedor_personajes">
    <?php include("conexion.php");
    $sql="SELECT * FROM personajes";
    $consulta_db=mysqli_query($conexion_db,$sql);

    while($mostar_datos=mysqli_fetch_assoc($consulta_db)){
?>
    <div>
        <h2 class="p-descripcion"><?php echo $mostar_datos['nombre'] ." ".$mostar_datos['apellido'];?></h2>
        <img class="imgen" src="imagenes/<?php echo $mostar_datos['imagen'];?>" alt="<?php echo $mostar_datos['nombre'];?>">
        <p class="p-descripcion"><?php echo $mostar_datos['descripcion'];?></p>
        <input type="button" class="button-eliminar" value="ELIMINAR" onclick="document.location='eliminar.php?id=<?php echo $mostar_datos['id'];?>'">
    </div>
    <?php }?>
</section>
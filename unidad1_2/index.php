<?php include('header.php');?>

<section class="contenedor_cargar text-center" >
    <h1>Cargar Personaje</h1>
    <form action="cargar_personajes.php" method="POST">
        <div class="form-group mt-2">
            <input type="text" name="nombre" class="form-control" required placeholder="Nombre">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="apellido" class="form-control" required placeholder="Apellido">
        </div>
        <div class="form-group mt-2">
            <input type="text" name="imagen" class="form-control" required placeholder="imagen">
        </div>
        <div class="form-group mt-2">
            <textarea name="descripcion" id="descripcion" cols="50" rows="5" placeholder="descripcion"></textarea>
        </div>
    <!-- <input > -->
    <div class="row">
        <div>
            <button type="submit" value="cargar personaje" class="btn btn-secondary">Cargar Personaje</button>
        </div>
    </div>

    <?php 
        if(isset($_GET["ok"])==1){
            echo "<h3 class='mensaje' >Personaje Cargo bien</h3>";
        }
    ?>    
    </form>
</section>




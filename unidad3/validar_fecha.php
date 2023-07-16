<?php
if(checkdate($_GET['day'],$_GET['month'],$_GET['year'])){
    echo "La fecha ingresada es la correcta";

}else{
    echo "La fecha no es la correcta";
}
?>
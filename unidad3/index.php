<?php
//buscar la info par conocer la iniciales para que sirve

date_default_timezone_set("America/Argentina/Buenos_Aires");
echo date("l, d/M/y -- H:i")."<br>";

$fecha_actual = date("d/F/o");

echo "La fecha actual es ".$fecha_actual;

$hora_actual =time();//devuelve la hora unix
echo ("<h3>  La hora actual en formato unix es $hora_actual </h3>");

$hora_actual2=getdate();
echo "<h3>" .$hora_actual2['hours']." : ".$hora_actual2['minutes']." : ".$hora_actual2['seconds']."</h3>";


$clase_anterior =date('d/n/Y',strtotime('-1week'));//hace el calculo de una semana atras ,al dia de  hoy 

$clase_anterior2 =date('d/n/Y',strtotime('-1week',strtotime($fecha_actual)));//hace el calculo de una semana atras ,al dia de  hoy 
echo $clase_anterior2;

$clase_proxima =date('d/n/Y',strtotime('+1week'));//hace el calculo de una semana adelante ,del dia de  hoy 


echo "La clase anterior fue :".$clase_anterior ."<br>";
echo "La clase proxima  sera :".$clase_proxima ."<br>";
echo "La clase proxima  sera :".$clase_proxima ."<br>";
echo strtotime("+1 week");//formato unix de la proxima

?>
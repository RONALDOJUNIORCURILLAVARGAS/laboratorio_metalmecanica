<?php 
session_start();

$op=$_POST['valorejecucion'];
$estado=(100-$op)*500/100;
$op=$op*500/100;
$grafico_material=$_SESSION['grafico_material'];
$grafico_material="<div style='width:".$op."px; height: 20px; background-color:#777777;margin-left:200px;'></div> <br>
<div style='width:".$estado."px; height: 20px; background-color:#777777;margin-left:200px;'></div>";

$_SESSION['grafico_material']=$grafico_material;
header('location:../views/modulo_cortado.php');

?>

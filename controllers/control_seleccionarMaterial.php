<?php 
session_start();
require_once '../models/BEAN/dimensionesBEAN.php';
require_once '../models/DAO/dimensionesDAO.php';
$objdimensionesBean=new dimensionesBEAN();
$objdimensionesDAO = new dimensionesDAO();

$idmaterial=$_POST['idmaterial'];
$nombrematerial=$_POST['nombrematerial'];

$objdimensionesBean ->setIDMATERIAL($idmaterial);

$lista_dimensiones=$objdimensionesDAO -> ListarDimensiones($objdimensionesBean);
$_SESSION['lista_dimensiones']=$lista_dimensiones;
$_SESSION['nombre_material_seleccionado']=$nombrematerial;
$graficomaterial="<div style='width: 500px; height: 20px; background-color:#777777;margin-left:200px;'></div>";
$_SESSION['grafico_material']=$graficomaterial;
header('location:../views/modulo_cortado.php');
?>

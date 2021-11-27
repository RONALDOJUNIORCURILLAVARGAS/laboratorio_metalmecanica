<?php 
session_start();
require_once '../models/BEAN/configherramientaBEAN.php';
require_once '../models/DAO/configherramientaDAO.php';
$objconfigherramientaBean=new configherramientaBEAN();
$objconfigherramientaDAO = new configherramientaDAO();

$idherramienta=$_POST['idherramienta'];
$nombreherramienta=$_POST['nombreherramienta'];

$objconfigherramientaBean ->setIDHERRAMIENTA($idherramienta);
$lista_configherramienta=$objconfigherramientaDAO -> ListarConfiguracion($objconfigherramientaBean);
$_SESSION['lista_configherramienta']=$lista_configherramienta;
$_SESSION['nombre_herramienta_seleccionado']=$nombreherramienta;
header('location:../views/modulo_cortado.php');
?>

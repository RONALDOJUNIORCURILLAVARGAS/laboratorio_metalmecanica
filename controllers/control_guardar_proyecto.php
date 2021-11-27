<?php 
session_start();
require_once '../models/BEAN/graficoBEAN.php';
require_once '../models/DAO/graficoDAO.php';
$objgraficoBean=new graficoBEAN();
$objgraficoDAO = new graficoDAO();

$id_proyecto=$_POST['idproyecto'];
$codigo=$_POST['codigografico'];

$objgraficoBean->setIDPROYECTO($id_proyecto);
$objgraficoBean->setCODIGO($codigo);
echo $objgraficoBean->CODIGO;
$graficado= $objgraficoDAO ->guardarProyecto($objgraficoBean);
echo $graficado;
$_SESSION['grafico_material']=$codigo;

header('location:../views/modulo_cortado.php');
?>
<?php 
session_start();
require_once '../models/DAO/herramientaDAO.php';
require_once '../models/DAO/materialDAO.php';
require_once '../models/DAO/graficoDAO.php';
require_once '../models/BEAN/dimensionesBEAN.php';
require_once '../models/DAO/dimensionesDAO.php';
require_once '../models/BEAN/graficoBEAN.php';

$objherramientaDAO = new herramientaDAO();
$objmaterialDAO = new materialDAO();

$objgraficoBean = new graficoBEAN();
$objgraficoDAO = new graficoDAO();

$objdimensionesBean=new dimensionesBEAN();
$objdimensionesDAO = new dimensionesDAO();


$op=$_POST['op'];
$id_proyecto=$_POST['idproyecto'];
echo $op.'El id es :  '.$id_proyecto;
switch ($op) {
    case 1:
        # code...
        break;
    
    case 2:
        $lista=$objherramientaDAO->ListarHerramientas(); 
        $lista_material=$objmaterialDAO-> ListarMateriales();

        $objgraficoBean ->setIDPROYECTO($id_proyecto);
        $lista_grafico=$objgraficoDAO ->ListarGraficos($objgraficoBean);
        $codigo="";
        foreach ($lista_grafico as $value) {
            $codigo=$value['codigo_grafico'];
        }
        $_SESSION['grafico_material']=$codigo;
        echo $codigo;
        $_SESSION['lista_herramienta']=$lista;
        $_SESSION['lista_materiales']=$lista_material;
        header('location:../views/modulo_cortado.php');
        break;
}



?>
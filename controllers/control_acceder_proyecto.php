<?php 
session_start();
require_once '../models/DAO/herramientaDAO.php';
require_once '../models/DAO/materialDAO.php';
require_once '../models/BEAN/dimensionesBEAN.php';
require_once '../models/DAO/dimensionesDAO.php';
$objherramientaDAO = new herramientaDAO();
$objmaterialDAO = new materialDAO();
$objdimensionesBean=new dimensionesBEAN();
$objdimensionesDAO = new dimensionesDAO();

$op=$_POST['op'];
switch ($op) {
    case 1:
        # code...
        break;
    
    case 2:
        $lista=$objherramientaDAO->ListarHerramientas(); 
        $lista_material=$objmaterialDAO-> ListarMateriales();
        /*
        foreach ($lista_material as $value) {
            $id_material=$value['id_material'];
            $objdimensionesBean ->setIDMATERIAL($id_material);
        }
        $lista_dimensiones=$objdimensionesDAO -> ListarDimensiones($objdimensionesBean);
        $_SESSION['lista_dimensiones']=$lista_dimensiones;
        */
        $_SESSION['lista_herramienta']=$lista;
        $_SESSION['lista_materiales']=$lista_material;
        header('location:../views/modulo_cortado.php');
        break;
}



?>
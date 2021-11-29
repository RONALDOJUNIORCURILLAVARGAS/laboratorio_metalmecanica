<?php 
session_start();
require_once '../models/DAO/herramientaDAO.php';
require_once '../models/DAO/materialDAO.php';
require_once '../models/DAO/graficoDAO.php';
require_once '../models/BEAN/dimensionesBEAN.php';
require_once '../models/DAO/dimensionesDAO.php';
require_once '../models/BEAN/graficoBEAN.php';
require_once '../models/BEAN/proyectoBEAN.php';
require_once '../models/DAO/proyectoDAO.php';

$objherramientaDAO = new herramientaDAO();
$objmaterialDAO = new materialDAO();

$objgraficoBean = new graficoBEAN();
$objgraficoDAO = new graficoDAO();

$objdimensionesBean=new dimensionesBEAN();
$objdimensionesDAO = new dimensionesDAO();


$op=$_POST['op'];
switch ($op) {
    case 1:
        # Registrar nuevo proyecto
        $nombreproyecto=$_POST['nombrenuevoproyecto'];
       $lista_usuario=$_SESSION['lista_usuario'];
       $idusuario='';
       foreach ($lista_usuario as $value) {
        $idusuario= $value['id'];
       }
       $objproyectoBEAN=new proyectoBEAN();
       $objproyectoDAO= new proyectoDAO();
       $objproyectoBEAN ->setNOMBRE($nombreproyecto);
       $objproyectoBEAN ->setIDUSUARIO($idusuario);
       $estado_ejecutar=$objproyectoDAO->RegistrarProyecto($objproyectoBEAN);
       $listaproyecto='';
       if($estado_ejecutar==1){
           $listaproyecto=$objproyectoDAO->ListaridProyecto($objproyectoBEAN);
           $idproyecto='';
           foreach ($listaproyecto as $val) {
                $idproyecto=$val['id_proyecto'];
           }
           $objgraficoBean->setIDPROYECTO($idproyecto);
           $insertargrafico=$objgraficoDAO->generarGrafico($objgraficoBean);
           $lista_grafico=$objgraficoDAO ->ListarGraficos($objgraficoBean);
           $codigo="";
            foreach ($lista_grafico as $value) {
                $codigo=$value['codigo_grafico'];
            }
            $_SESSION['grafico_material']=$codigo;
            $lista=$objherramientaDAO->ListarHerramientas(); 
            $lista_material=$objmaterialDAO-> ListarMateriales();
            $_SESSION['lista_herramienta']=$lista;
            $_SESSION['lista_materiales']=$lista_material;
            $_SESSION['lista_proyectos']=$listaproyecto;
            $_SESSION['id_proyecto']=$id_proyecto;
            header('location:../views/modulo_cortado.php');
       }
       else{ 
        header('location:../views/reg_new_project.php');
       }  
        break;
    case 2: 

        $id_proyecto=$_POST['idproyecto'];

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
        $_SESSION['id_proyecto']=$id_proyecto;
        header('location:../views/modulo_cortado.php');

        break;
}



?>
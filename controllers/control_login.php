<?php
session_start();
require_once '../models/DAO/usuariosDAO.php';
require_once '../models/DAO/proyectoDAO.php';
require_once '../models/BEAN/usuariosBEAN.php';
require_once '../models/BEAN/proyectoBEAN.php';
$objususarioBEAN = new usuariosBEAN();
$objususarioDAO  = new usuariosDAO();



$op=$_POST['op'];


switch ($op) {
        case 1:
                $correo=$_POST['correo'];
                $pass=$_POST['clave'];
                $objususarioBEAN ->setCORREO($correo);
                $objususarioBEAN ->setPASS($pass);
                $lista=$objususarioDAO->IngresarUsuario($objususarioBEAN); 
                if($lista==null)
                        {
                        /*Asignamos el estado a la sesion estado*/
                        $_SESSION['estado']=false;   
                        header('location:../views/login.php');
                        
                        
                }
                else{
                        $_SESSION['estado']=false;
                        $_SESSION['lista_usuario']=$lista;
                        $objproyectoBEAN = new proyectoBEAN();
                        $objproyectoDAO  = new proyectoDAO();
                        $id_usuario='';
                     foreach ($lista as $value) {
                        $id_usuario=$value['id'];
                     }
                     $objproyectoBEAN ->setIDUSUARIO($id_usuario);
                     $lista_proyectos=$objproyectoDAO -> ListarProyectos($objproyectoBEAN); 
                        $_SESSION['lista_proyectos']= $lista_proyectos;


                        header('location:../views/principal.php');
                }
                break;
        
        case 2:
                if(isset($_SESSION['estado']) )
                {
                unset($_SESSION['estado']);
                }
                if(isset($_SESSION['lista_usuario']) )
                {
                unset($_SESSION['lista_usuario']);
                }
                if(isset($_SESSION['lista_proyectos'])){
                unset($_SESSION['lista_proyectos']);
                }
                header('Location:../');
                break;
        case 3:
                header('Location:../views/registrar.php');
                break;
}

    
            
          
    
?>
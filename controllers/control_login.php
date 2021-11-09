<?php
session_start();
require_once '../models/DAO/usuariosDAO.php';
require_once '../models/BEAN/usuariosBEAN.php';
$objususarioBEAN = new usuariosBEAN();
$objususarioDAO  = new usuariosDAO();
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
<<<<<<< HEAD
            break;
    }
    else {
            $_SESSION['estado']=true;
            header('location:../views/principal.php');
            break;
    }
=======
        
    }
    
            $_SESSION['estado']=true;
            header('location:../views/principal.php');
       
    
>>>>>>> 1d84fa74443cd5ebeb8f73bcbe45a8d1805f73b6
?>
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
         
        
    }
    
            $_SESSION['estado']=false;
            header('location:../views/principal.php');
          
    
?>
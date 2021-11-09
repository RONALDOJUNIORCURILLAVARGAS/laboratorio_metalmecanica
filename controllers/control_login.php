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
$validar=0;
    if($lista==null)
            {
            /*Asignamos el estado a la sesion estado*/
            
            $_SESSION['estado']=false;   
            header('location:../views/login.php');
            $validar=1;
    }
       
    if($validar==0){
            //Cambiar a true
            $_SESSION['estado']=false;
            header('location:../views/principal.php');
       }
    
?>
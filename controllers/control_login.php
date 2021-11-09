<?php
session_start();
require_once '../models/DAO/usuariosDAO.php';
require_once '../models/BEAN/usuariosBEAN.php';
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
                header('Location:../');
                break;
}

    
            
          
    
?>
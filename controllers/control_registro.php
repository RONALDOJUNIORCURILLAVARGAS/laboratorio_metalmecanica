<?php 
session_start();
require_once '../models/DAO/usuariosDAO.php';
require_once '../models/DAO/proyectoDAO.php';
require_once '../models/BEAN/usuariosBEAN.php';
require_once '../models/BEAN/proyectoBEAN.php';
$objusuarioBEAN = new usuariosBEAN();
$objusuarioDAO  = new usuariosDAO();
$op=$_POST['op'];
switch ($op) {
    case 1:
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $correo=$_POST['correo'];
        $clave=$_POST['clave'];
        $objusuarioBEAN ->setNOMBRE($nombre);
        $objusuarioBEAN ->setAPELLIDO($apellido);
        $objusuarioBEAN ->setCORREO($correo);
        $objusuarioBEAN ->setPASS($clave);
        $estado=$objusuarioDAO->RegistrarUsuario($objusuarioBEAN); 
        echo $estado;
        if($estado==1){
            echo 'estado no vacio';
            $lista=$objusuarioDAO->IngresarUsuario($objusuarioBEAN); 
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
        else{
            echo 'estado vacio';
            $_SESSION['estado_reg']=true; 
            header('location:../views/registrar.php');
            
        }
        break;
    case 2:
        break;
}

?>
<?php
require_once '../models/utils/conexionBD.php'; 
require_once '../models/BEAN/usuariosBEAN.php'; 
class usuariosDAO {

    public function IngresarUsuario(usuariosBEAN $objPersonaBean) {
        try{
            $sql="SELECT * FROM USUARIOS WHERE CORREO='$objPersonaBean->CORREO'  AND  PASS='$objPersonaBean->PASS' ; ";
            $objc=new conexionBD();
            $cn=$objc->getConexionBD();
            $rs=mysqli_query($cn,$sql);
            $lista=array();
            if($rs){       
                while($fila=mysqli_fetch_assoc($rs)){
                    $lista[]=$fila;
                } 
            }
            else{
                $lista=null;
            }
            mysqli_close($cn);   
        }
        catch(Exception $exc){
        }
        return $lista;
    }

    public function RegistrarUsuario(usuariosBEAN $objPersonaBean){
        $i=0;
        try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="INSERT INTO usuarios(nombre,apellido,correo,pass) VALUES ('$objPersonaBean->NOMBRE','$objPersonaBean->APELLIDO','$objPersonaBean->CORREO','$objPersonaBean->PASS');";
            /*Creamos un objeto referente a la conexion*/
            $objc=new conexionBD();
            /*Creamos la conexion*/
            $cn=$objc->getConexionBD();
            /*Ejecutamos el query dentro de la conexion a la Base de Datos*/
            $i= mysqli_query($cn,$sql);
            /*Cerramos la conexion a la base de datos*/
            mysqli_close($cn);   
        }
    catch(Exception $exc){
    }
    /*Retorna un estado de la ejecucion por default es 0 v null si no se ejecuto*/
    return $i;
    }


}
?>
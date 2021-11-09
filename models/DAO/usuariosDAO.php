<?php
<<<<<<< HEAD
require_once '../utils/conexionBD.php'; 
require_once '../BEAN/usuariosBEAN.php'; 
=======
require_once '../models/utils/conexionBD.php'; 
require_once '../models/BEAN/usuariosBEAN.php'; 
>>>>>>> 1d84fa74443cd5ebeb8f73bcbe45a8d1805f73b6
class usuariosDAO {

    public function IngresarUsuario(usuariosBEAN $objPersonaBean) {
        try{
<<<<<<< HEAD
            $sql="SELECT * FROM USUARIO WHERE CORREO_USUARIO='$objPersonaBean->CORREO'  AND  PASSWORD_USUARIO='$objPersonaBean->PASS' ; ";
=======
            $sql="SELECT * FROM USUARIO WHERE CORREO='$objPersonaBean->CORREO'  AND  PASS='$objPersonaBean->PASS' ; ";
>>>>>>> 1d84fa74443cd5ebeb8f73bcbe45a8d1805f73b6
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


}
?>
<?php
require_once '../utils/conexionBD.php'; 
require_once '../BEAN/usuariosBEAN.php'; 
class usuariosDAO {

    public function IngresarUsuario(usuariosBEAN $objPersonaBean) {
        try{
            $sql="SELECT * FROM USUARIO WHERE CORREO='$objPersonaBean->CORREO'  AND  PASS='$objPersonaBean->PASS' ; ";
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
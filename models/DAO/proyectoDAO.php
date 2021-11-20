<?php
require_once '../models/utils/conexionBD.php'; 
//Eliminar usuarios BEAN
require_once '../models/BEAN/usuariosBEAN.php'; 
require_once '../models/BEAN/proyectoBEAN.php';
class proyectoDAO {

    public function ListarProyectos(proyectoBEAN $objproyectoBean) {
        try{
            $sql="SELECT *FROM proyecto p INNER JOIN usuarios u ON u.id= p.id_proyecto WHERE u.id='$objproyectoBean->IDUSUARIO' ; ";
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
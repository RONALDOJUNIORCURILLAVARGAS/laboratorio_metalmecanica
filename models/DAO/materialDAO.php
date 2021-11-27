<?php
require_once '../models/utils/conexionBD.php'; 
require_once '../models/BEAN/materialBEAN.php'; 
class materialDAO {

    public function ListarMateriales() {
        try{
            $sql="SELECT * FROM material;";
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
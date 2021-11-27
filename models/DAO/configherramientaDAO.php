<?php
require_once '../models/utils/conexionBD.php'; 
require_once '../models/BEAN/configherramientaBEAN.php'; 
class configherramientaDAO {
    public function ListarConfiguracion(configherramientaBEAN $objconfigherramientaBean) {
        try{
            $sql="SELECT h.id_herramienta,h.nombre_herramienta,c.id_configherramienta,c.punto_referencia_configherramienta,c.valor_configherramienta,c.unidad__configherramienta FROM herramienta h INNER JOIN configherramienta_herramienta ch ON ch.id_herramienta=h.id_herramienta INNER JOIN configherramienta c ON c.id_configherramienta=ch.id_config WHERE h.id_herramienta =$objconfigherramientaBean->IDHERRAMIENTA;";
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
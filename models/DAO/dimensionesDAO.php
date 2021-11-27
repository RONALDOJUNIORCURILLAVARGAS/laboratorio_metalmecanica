<?php
require_once '../models/utils/conexionBD.php'; 
require_once '../models/BEAN/dimensionesBEAN.php'; 
class dimensionesDAO {
    public function ListarDimensiones(dimensionesBEAN $objdimensionesBean) {
        try{
            $sql="SELECT m.id_material,d.id_dimensiones,d.nombre_dimensiones,d.valor_dimensiones,d.unidad_dimensiones FROM material m INNER JOIN material_dimensiones md ON m.id_material=md.id_material INNER JOIN dimensiones d ON md.id_dimensiones=d.id_dimensiones WHERE m.id_material=$objdimensionesBean->IDMATERIAL;";
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
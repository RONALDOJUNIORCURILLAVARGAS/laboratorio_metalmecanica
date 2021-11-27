<?php
require_once '../models/utils/conexionBD.php'; 
require_once '../models/BEAN/graficoBEAN.php'; 
class graficoDAO {
    public function guardarProyecto(graficoBEAN $objgraficoBean) {
        $i=0;
        try{
            /*Inserccion del usuario mediante DML(LENGUAJE DE MANIPULACION DE DATOS)*/
            $sql="UPDATE grafico SET codigo_grafico =".'"'.$objgraficoBean->CODIGO.'"'."WHERE id_proyecto=$objgraficoBean->IDPROYECTO;";
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
    public function ListarGraficos(graficoBEAN $objgraficoBean) {
        try{
            $sql="SELECT * FROM grafico WHERE id_proyecto=$objgraficoBean->IDPROYECTO; ";
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
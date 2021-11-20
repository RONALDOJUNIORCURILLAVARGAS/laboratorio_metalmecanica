<?php

class proyectoBEAN {
   public $ID;
   public $NOMBRE;
   public $IMAGEN;
   public $IDUSUARIO;
   public function getID() {
       return $this->ID;
   }

   public function setID($ID): void {
       $this->ID = $ID;
   }
    
   public function getNOMBRE() {
       return $this->NOMBRE;
   }

   public function setNOMBRE($NOMBRE): void {
       $this->NOMBRE = $NOMBRE;
   }

   public function getIMAGEN() {
       return $this->IMAGEN;
   }

   public function setIMAGEN($IMAGEN): void {
       $this->IMAGEN = $IMAGEN;
   }


   public function getIDUSUARIO() {
       return $this->IDUSUARIO;
   }

   public function setIDUSUARIO($IDUSUARIO): void {
    $this->IDUSUARIO = $IDUSUARIO;
   }
   

}
?>

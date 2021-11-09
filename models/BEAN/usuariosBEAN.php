<?php

class usuariosBEAN {
   public $ID;
   public $NOMBRE;
   public $APELLIDO;
   public $CORREO;
   public $PASS;
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

   public function getAPELLIDO() {
       return $this->APELLIDO;
   }

   public function setAPELLIDO($APELLIDO): void {
       $this->APELLIDO = $APELLIDO;
   }


   public function getCORREO() {
       return $this->CORREO;
   }

   public function setCORREO($CORREO): void {
    $this->CORREO = $CORREO;
   }
<<<<<<< HEAD
   PASS
=======
   
>>>>>>> 1d84fa74443cd5ebeb8f73bcbe45a8d1805f73b6
   public function getPASS() {
       return $this->PASS;
   }

   public function setPASS($PASS): void {
    $this->PASS = $PASS;
   }

}
?>

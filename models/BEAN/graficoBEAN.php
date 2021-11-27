<?php

class graficoBEAN {
   public $ID;
   public $IDPROYECTO;
   public $CODIGO;
   public function getID() {
       return $this->ID;
   }

   public function setID($ID): void {
       $this->ID = $ID;
   }
    
   public function getIDPROYECTO() {
       return $this->IDPROYECTO;
   }

   public function setIDPROYECTO($IDPROYECTO): void {
       $this->IDPROYECTO= $IDPROYECTO;
   }

   public function getCODIGO() {
       return $this->CODIGO;
   }

   public function setCODIGO($CODIGO): void {
       $this->CODIGO = $CODIGO;
   }

}
?>

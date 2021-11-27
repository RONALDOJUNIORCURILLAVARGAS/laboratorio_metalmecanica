<?php

class dimensionesBEAN {
   public $ID;
   public $IDMATERIAL;
   public $NOMBRE;
   public $VALOR;
   public $UNIDAD;
   public function getID() {
       return $this->ID;
   }

   public function setID($ID): void {
       $this->ID = $ID;
   }
   public function getIDMATERIAL() {
    return $this->IDMATERIAL;
    }

    public function setIDMATERIAL($IDMATERIAL): void {
        $this->IDMATERIAL= $IDMATERIAL;
    }
   public function getNOMBRE() {
       return $this->NOMBRE;
   }

   public function setNOMBRE($NOMBRE): void {
       $this->NOMBRE = $NOMBRE;
   }

   public function getVALOR() {
       return $this->VALOR;
   }

   public function setVALOR($VALOR): void {
       $this->VALOR = $VALOR;
   }
   public function getUNIDAD() {
    return $this->UNIDAD;
    }

    public function setUNIDAD($UNIDAD): void {
        $this->UNIDAD = $UNIDAD;
    }
}
?>

<?php

class configherramientaBEAN {
   public $ID;
   public $IDHERRAMIENTA;
   public $PUNTO;
   public $VALOR;
   public $UNIDAD;

   public function getID() {
       return $this->ID;
   }
   public function setID($ID): void {
       $this->ID = $ID;
   }
   public function getIDHERRAMIENTA() {
    return $this->IDHERRAMIENTA;
    }

    public function setIDHERRAMIENTA($IDHERRAMIENTA): void {
        $this->IDHERRAMIENTA = $IDHERRAMIENTA;
    }
   public function getPUNTO() {
       return $this->PUNTO;
   }

   public function setPUNTO($PUNTO): void {
       $this->PUNTO = $PUNTO;
   }

   public function getVALOR() {
       return $this->VALOR;
   }

   public function setVALOR($VALOR): void {
       $this->VALOR= $VALOR;
   }
   public function getUNIDAD() {
    return $this->UNIDAD;
    }

    public function setUNIDAD($UNIDAD): void {
        $this->UNIDAD= $UNIDAD;
    }
}
?>

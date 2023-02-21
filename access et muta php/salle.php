<?php

class Salle {
        private $Id;
        private $libelle;
        private $capacite;

        public function __construct($sId) {
            $this->Id = $sId;
        }
    
        public function getId() {
            return $this->Id;
      }

      public function __destruct(){
  }
}

    $salle = new Salle();
    $salle->setId("salle à manger");
    echo($salle->getId());


?>
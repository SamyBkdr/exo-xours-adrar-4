<?php

class Animal {
        private $Id;
        private $libelle;
        private $predateur;

    public function __construct($sId) {
        $this->Id = $sId;
    }

    public function getId() {
        return $this->Id;
  }

  public function __destruct(){
  }
}

$animal = new Animal();
$animal->setId("lion");
echo($animal->getId());

?>
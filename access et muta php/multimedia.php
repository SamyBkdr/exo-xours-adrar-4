<?php

class Multimedia {
        private $duree;

    public function __construct($sduree) {
        $this->duree = $sduree;
    }

    public function getduree() {
        return $this->duree;
  }

  public function __destruct(){
  }
}

$cd = new Multimedia();
$duree->setduree("1h");
echo($duree->getduree());

?>
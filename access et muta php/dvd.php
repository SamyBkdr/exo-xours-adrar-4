<?php

class Dvd {
        private $duree;
        private $bonus;

    public function __construct($sduree) {
        $this->duree = $sduree;
    }

    public function getduree() {
        return $this->duree;
  }

  public function __destruct(){
  }
}

$cd = new Dvd();
$duree->setduree("2h");
echo($duree->getduree());

?>
<?php

class Cd {
        private $duree;
        private $nbPlages;

    public function __construct($sduree) {
        $this->duree = $sduree;
    }

    public function getduree() {
        return $this->duree;
  }

  public function __destruct(){
  }
}

$cd = new Cd();
$duree->setduree("1h");
echo($duree->getduree());

?>
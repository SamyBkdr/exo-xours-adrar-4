<?php

class Livre {
        private $nbPages;

    public function __construct($snbPages) {
        $this->nbPages = $snbPages;
    }

    public function getnbPages() {
        return $this->nbPages;
  }

  public function __destruct(){
  }
}

$livre = new Livre();
$nbPages->setnbPages("200");
echo($nbPages->getnbPages());

?>
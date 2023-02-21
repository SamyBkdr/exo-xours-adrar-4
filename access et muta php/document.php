<?php

class Document {
        private $Auteur;
        private $Titre;
        private $Reference;

    public function __construct($sAuteur) {
        $this->Auteur = $sAuteur;
    }

    public function getAuteur() {
        return $this->Auteur;
  }

  public function __destruct(){
  }
}

$document = new Document();
$document->setDocument("");
echo($document->getDocument());

?>
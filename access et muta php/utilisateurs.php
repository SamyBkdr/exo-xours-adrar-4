<?php
    class Utilisateurs {
        private $Id;
        private $Nom;
        private $Prenom;
    
        public function __construct($sId) {
            $this->Id = $sId;
        }
    
        public function getId() {
            return $this->Id;
        }

        public function __destruct(){
        
        }

}

    $utilisateurs = new Utilisateurs();
    $utilisateurs->Id = "samy_bkdr";
    echo($utilisateurs->getId());

?>

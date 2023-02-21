<?php
    // On inclut la connexion à la BDD à notre contrôleur
    include("../models/connect.php");

    // On inclut la vue à notre contrôleur
    include("../views/view_article.php");
   
    // On teste l'existence des champs du formulaire
    if(isset($_POST['name_article']) && isset($_POST['content_article'])) {
        // Création de deux variables
        $name = $_POST['name_article'];
        $content = $_POST['content_article'];

        // Inclusion du modèle
        include("../models/model_article.php");
    } else {
        // Affichage d'un message d'erreur si au moins un des champs est vide
        echo '<p>Veuillez remplir les champs du formulaire</p>';
    }
?>

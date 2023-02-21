<?php
    try {
        // Exécution de la requête SQL INSERT
        $reponse = $bdd->query('INSERT INTO articles(name_article, content_article) VALUES("'.$name.'", "'.$content.'")');
        echo "Ajout de l'article : $name qui a comme contenu : $content";
    } catch(Exception $e) {
        // Affichage d’une exception en cas d’erreur
        die("Erreur: " . $e->getMessage());
    }
?>

<?php
    require './utilisateurs.php';
    require './animal.php';
    require './salle.php';
    require './document.php'; 
    require './cd.php';
    require './dvd.php';
    require './livres.php';
    require './multimedia.php';


    $utilisateurs = new Utilisateurs();
    $utilisateurs-> id = "samy_bkdr";
    $utilisateurs-> nom = "ben";
    $utilisateurs-> prenom = "samy";


    $animal = new Animal();
    $animal-> id = "lion";
    $animal-> libelle = "true";
    $animal-> predateur = "true";


    $salle = new Salle();
    $salle-> id = "salle a manger";
    $salle-> libelle = "true";
    $salle-> capacite = "true";
    

    $document = new Document();
    $document-> auteur = "victor hugo";
    $document-> titre = "miserable";
    $document-> reference = "true";


    $cd = new Cd();
    $cd-> duree = "1h";
    $cd-> nbPlages = "10";


    $livres = new Livres();
    $livres-> nbPages = "200";


    $dvd = new Dvd();
    $dvd-> duree = "2h";
    $dvd-> bonus = "true";
?>
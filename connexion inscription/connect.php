<?php
    session_start();

    try {
        $db = new PDO('mysql:host=localhost;dbname=adrar_classrooms', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        $db = NULL;
        echo ("Erreur: " . $e->getMessage());
    }
?>

<?php
    // Cette fonction sert à démarrer une session PHP (que vous pouvez notamment retrouver dans vos cookies)
    // Nous nous en servirons un petit peu plus tard
    session_start();

    try {
        $db = new PDO('mysql:host=localhost;dbname=adrar_classrooms', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        $db = NULL;
        echo ("Erreur: " . $e->getMessage());
    }
?>

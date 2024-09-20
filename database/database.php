<?php

    $servername = "localhost";
    $username = "root";
    $password = "";


    // Connexion à la base de données sur PhpMyAdmin avec xamp

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=loginpage", $username, $password); //// La classe PDO est utilisée ici pour établir la connexion,  "mysql:host=$servername;dbname=loginpage" : Détermine le serveur MySQL et la base de données à utiliser.
        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie";
    }catch (PDOException $e) {
        echo "Connexion échouée : " . $e -> getMessage(); // Affiche un message d'erreur si la connexion échoue
    }

?>

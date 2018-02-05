<?php
    $secret = include ('secret.php');
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', $secret["login"], $secret["password"]);
    } catch (Exception $e) {
        die("Erreur de connexion");
}


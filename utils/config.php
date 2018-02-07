<?php
    $secret = include('secret.php');
    $bdd = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', $secret["login"], $secret["password"]);



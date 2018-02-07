<?php
    session_start ();

    if(isset($_SESSION['email']) && isset($_SESSION['pass'])) {
        echo '<html>';
        echo '<head>';
        echo '<title>Page de notre section membre</title>';
        echo '</head>';

        echo '<body>';
        echo 'Votre login est '.$_SESSION['email'].' et votre mot de passe est '.$_SESSION['pass'].'.';
        echo '<br />';

        echo '<a href="adminLogout.php">Déconnection</a>';
    } else {
        header('location: admin.php');
    }
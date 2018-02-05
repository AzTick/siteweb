<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Connexion</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>

<body class="text-center">
<div class="container-fluid">

    <div class="row">
        <div class="col-sm">
            <?php
            include("config.php");

            if (isset($_POST['email'])) {
                $req = $bdd->prepare('SELECT ID, password FROM membres WHERE email = :email');
                $req->execute([
                    'email' => $_POST['email']
                ]);


                $resultat = $req->fetch();

                if (!$resultat) {
                    echo "<div class=\"alert alert-danger\" role=\"alert\"> Cette identifiant ou ce mot de passe est incorrect</div>";
                } else {
                    if (password_verify($_POST['pass'], $resultat['password'])) {
                        echo "<div class=\"alert alert-success\" role=\"alert\"> Connexion réussie ... Cliquez  <a href=\"#\" class=\"alert-link\">ICI</a> pour être rediriger</div>";
                    } else {
                        echo "<div class=\"alert alert-danger\" role=\"alert\"> Cette identifiant ou ce mot de passe est incorrect</div>";
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="row">

        <form class="form-style" method="post">
            <img class="mb-4" src="http://aztick.fr/images/logo.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
            <label for="inputEmail" class="sr-only">Adresse Mail</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required
                   autofocus>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
        </form>
    </div>

</div>

</body>
</html>


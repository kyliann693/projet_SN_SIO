<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="#">
        <title>Connexion</title>
    </head>
    <body>

    <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <p><strong>Erreur</strong> mot de passe incorrect</p>
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?>
        </div>
        <section>
            <form method="post" action="../traitement/traitement_connexion.php">
                <label for="name">Nom</label>
                <input name="name" class="input_form">
                <label for="classe">Classe</label>
                <input name="classe" class="input_form">
                <input type="submit">
                <a href="inscription.php">S'inscrire</a>
            </form>
        </section>
    </body>
</html>
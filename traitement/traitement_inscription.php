<?php
require_once 'config.php'; // On inclu la connexion à la bdd

// Si les variables existent et qu'elles ne sont pas vides
if(!empty($_POST['name']) && !empty($_POST['firstname'])  && !empty($_POST['classe'])) {
    // Patch XSS
    $name = htmlspecialchars($_POST['nom']);
    $firstname = htmlspecialchars($_POST['prenom']);
    $classe = htmlspecialchars($_POST['classe']);

    // On vérifie si l'utilisateur existe
    $check = $bdd->prepare('SELECT name, classe FROM utilisateurs WHERE classe = ?');
    $check->execute(array($classe));
    $data = $check->fetch();
    $row = $check->rowCount();

    $classe = strtolower($classe);
    
    // Si la requete renvoie un 0 alors l'utilisateur n'existe pas
    if ($row == 0) {
        if (strlen($name && $firstname) <= 100) { // On verifie que la longueur du nom prénom <= 100
            if (strlen($classe) <= 100) { // On verifie que la longueur de la classe <= 100
    
                        // On stock l'adresse IP
                        $ip = $_SERVER['REMOTE_ADDR'];

                        // On insère dans la base de données
                        $insert = $bdd->prepare('INSERT INTO utilisateurs(name, firstname, classe ip, token) VALUES(:name, :firstname, :classe, :ip, :token)');
                        $insert->execute(array(
                            'name' => $name,
                            'firstname' => $firstname,
                            'classe' => $classe,
                            'ip' => $ip,
                            'token' => bin2hex(openssl_random_pseudo_bytes(64))
                        ));

                        // On redirige avec le message de succès
                        header('Location:../src/inscription.php?reg_err=success');
                        die();
                    } else {
                        header('Location: ../src/inscription.php?reg_err=password');
                        die();
                    }
        } else {
            header('Location: ../src/inscription.php?reg_err=pseudo_length');
            die();
        }
    } else {
        header('Location: ../src/inscription.php?reg_err=already');
        die();
    }
}
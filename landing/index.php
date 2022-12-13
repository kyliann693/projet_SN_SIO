<?php
/*session_start();
require_once '../traitement/config.php'; // ajout connexion bdd
if(!isset($_SESSION['user'])){
    header('Location:index.php');
    die();
}

// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();*/
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="#">
        <title>landing</title>
    </head>
    <body>      
        <h1>Choisissez vos professeurs</h1>
        <form method="post" action="#">
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Status</th>
                </tr>
                <tr class="professeur">
                    <td>ALAND</td>
                    <td>Kyliann</td>
                    <td><input type="checkbox"></td>
                </tr>
            </table>
            <div >
            </div>
            <input type="submit">
        </form>
    </body>
</html>
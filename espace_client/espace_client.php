<?php
/**
 * Created by PhpStorm.
 * User: zakar
 * Date: 17/05/2017
 * Time: 16:10
 */

?>


<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/revu.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Votre Espace Client</title>
</head>
<body>
    <?php include header.php ?>
<main>
    <div class="espace">
    <h1>Espace Client</h1>
    <h2>Nom prénom des utilisateur</h2>
    <h3>Gérer mon information personnelles</h3>
    </div>
    <div class="compte">
        <h2>Récapitulatif de votre compte</h2>

        <p>Commande en cours <br>
        Ma dernière commande :
        </p>
                <img src="img-content/couv_284.jpg" alt="LArchitecture">
        <p class="info_commande">
            Ile de France <br>
            N°287-2017 <br>
            1 article <br>
            Prix : 19€ <br>
            Total: 22€ <br>
            statut: Délivré <br>

        </p>
        <table>
            <tr>
                <th>Adresse de facturation :</th>
                <td>5 rue de l'église <br> 94300 <br> Vincennes</td>
            </tr>
            <tr>
                <th>Adresse de Livraison :</th>
                <td>5 rue de l'église <br> 94300 <br> Vincennes</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="historique">
        <h2>Mon Historique</h2>
        <ul>
            <li>Mes commandes</li>
            <li>Mes abonnements</li>
            <li>Revues consultées</li>
        </ul>
    </div>
</main>

<?php include footer.php ?>



</body>
</html>

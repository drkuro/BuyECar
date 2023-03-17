<?php define('ROOT_PATH', '../'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <?php include('../navbar.php'); ?>

    <h1>Création de compte</h1>
    <br>
    <h2>Renseignez votre profil</h2>

    <form action="inscriptionDisplay.php" method="POST">

        <input type="text" name="nom" placeholder="Nom" />
        <input type="text" name="prenom" placeholder="Prénom" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="motDePasse" placeholder="Mot de Passe" />
        <button type="submit">Créer</button>

    </form>


</body>

</html>
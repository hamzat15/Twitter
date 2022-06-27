<?php
    require_once "pdo.php";
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="mini.twitter.ico">
    <link href="inscription.css" rel="stylesheet">
    <title>Twitter</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.twitter.png" alt="logo_twitter" width="60" height="60">
        </div>
        <form method="POST" action="" name="formulaire">
            <fieldset class="fieldset1">
                <h1>Créer votre compte</h1>
                    <label for="Nom">Nom :<sup>*</sup></label>
                    <input type="text" id="Nom" name="nom" placeholder="Nom et prenom" required>
                    <br>
                    <br>
                    <label for="Email">Email :<sup>*</sup></label>
                    <input type="email" id="email" name="email" placeholder="Votre@email.fr" required>
                    <br>
                    <label for="password">password :<sup>*</sup></label>
                    <input type="password" id="password" name="password" placeholder="******" required>
                    <br>
                    <label for="pseudo">pseudo :<sup>*</sup></label>
                    <input type="pseudo" id="pseudo" name="pseudo" placeholder="pseudo" required>
                    <br>
                    <a href="#">Utiliser un téléphone</a>
                    <br>
                    <h3>Date de naissance</h3>
                    <p class="para">Cette information ne sera pas affichée publiquement. Confirmez votre âge, <br> même si ce compte est pour une entreprise, un animal de compagnie ou autre chose.</p>
                    <br>
                    <label for="birthday">Date de naissance :<sup>*</sup></label>
                    <input type="date" id="birthday" name="birthday" required>
                    <br>
                    <br>
                    <input type="submit" id="submit" value="Suivant" required> 
            </fieldset>
        </form>
            
            <p>* Champs obligatoire</p>
    </header>
</body>
</html>
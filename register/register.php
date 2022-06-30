<?php
    require_once "../pdo.php";
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="mini.twitter.ico">
    <link href="style.css" rel="stylesheet">
    <title>Twitter</title>
</head>
<body>
    <header>
      <h1>Créer votre compte</h1>
    </header>
    <div class="logo">
        <img src="../assets/mini.twitter.ico" alt="logo_twitter" width="60" height="60">
    </div>
    <div class="form">
      <form method="POST" action="" name="formulaire">
                <div class="sec">
                    <label for="Nom">Nom :</label>
                    <input type="text" id="Nom" name="nom" placeholder="Nom et prenom" required>
                </div>

                <div class="sec">
                    <label for="Email">Email :</label>
                    <input type="text" id="email" name="email" placeholder="Votre@email.fr" required>
                </div>

                <div class="sec">
                    <label for="password">password :</label>
                    <input type="text" id="password" name="password" placeholder="******" required>
                </div> 

                <div class="sec">
                    <label for="pseudo">pseudo :</label>
                    <input type="text" id="pseudo" name="pseudo" placeholder="pseudo" required>
                </div>

                <div class="sec">
                    <label for="birthday">Date de naissance :</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                    <input type="submit" id="submit" value="Suivant" required> 
        </form>
        </div>
            
</body>
</html>
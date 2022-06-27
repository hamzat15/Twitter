<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="twitter.ico">
    <link rel="stylesheet" href="connexion.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img src="img/tweet.png" alt="twitter" class="twitt">
        <div class="connexion">
            <h1>Se connecter a Twitter</h1>
            <form class="f1" action="connecpdo.php" method="POST">
                <label><input type="text" name="nom" placeholder="Telephone, email ou nom d'utilisateur" required/></label></br></br>
                <label><input type="password" name="password" placeholder="Mot de passe" required/></label></br></br>
                <input type="submit" value="Se connecter" required></br></br>
                <a href="incription.php">S'inscrire sur Twitter</a>
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>

            </form>
        </div>
    </div>
</body>
</html>
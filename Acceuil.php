<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="mini.twitter.ico">
    <link href="acceuil.css" rel="stylesheet">
    <title>Twitter</title>
    <link rel="short icon" href="./assets/logotwitter.png"/> 
</head>
<body>
    <div class="main">
        <div class="leftside">
            <img src="./assets/Untitled.png" alt="" srcset="">
        </div>
        <div class="rightside">
            <img class="logo-bleu" src="./assets/logotwitter.png" alt></img> 
            <div class="header">
                <h1>Ca se passe<br> maintenant</h1><br>
            </div>
           
            <div class="option">
                <h3>Rejoignez Twitter dès aujourd'hui.</h3>
                <div class="btnSign">
                    <div class="google">
                        <input type="submit" value="S'inscrire avec Google" class="">
                    </div>
                    <div class="apple">
                        <input type="submit" value="S'inscrire avec Apple" class="">
                    </div>
                </div>
                <div class="ou">
                    <p>ou</p>
                </div>
                <div class="btnTel">
                    <input type="submit" value="Creer un compte">
                </div>
                <div class="spanSign">
                    <span>
                        En vous inscrivant, vous acceptez les Conditions<br> d'Utilisation et la Politique de Confidentialité, incluant<br> l'Utilisation de Cookies.
                    </span>
                </div>
            </div>
            <div class="connect">
                <h4>Vous avez déjà un compte ?</h4><br>
                <input onClick="AfficherMasquer()" type="button" value="Se connecter" >
            </div>
            <!--
            <div id="divacacher" style="display:none;">
                <input class="cross" onClick="delet()" type="button" value="X">
                <input type="text" id="name" name="name" placeholder="password" require>
                <input type="text" id="password" name="password" placeholder="password" require>
                <a href="./register/register.php">Accueil</a>
            </div> -->  
        </div>
    </div>     
    <div class="footer">
        <span class="span">00kngrliniotnùotihigùhoipjt0</span>
    </div>
    <script src="./index.js"></script>
    </body>
</html>
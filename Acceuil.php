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
    <div class="connection" id="divcacher" style="display:none;"></div>
        <div class="opt" id="opt"  style="display:none;"> 
            <div class="delete">
                <input class="del" onClick="delet()" type="button" value="X">
            </div>
            <img class="logo-bleu" src="./assets/logotwitter.png" alt></img>  
            <div class="left">
                <h3>Connectez vous a<br> Twitter</h3>
                <div class="btnT">
                    <div>
                        <input type="text" id="name" name="name" placeholder="email" require>
                    </div>
                    <div>
                        <input type="text" id="password" name="password" placeholder="password" require>
                    </div>
                </div>
                <div class="btnConnect">
                    <input  type="submit" value="Suivant">
                </div>
                <div>
                    <p>Vous n'avez pas de compte ? <a href="">Inscrivez-vous</a></p>
                </div>
            </div>
    </div>
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
                        <div>
                            <input type="button" value="S'inscrire avec Google">
                        </div>
                        <div>
                            <input type="submit" value="S'inscrire avec Apple">
                        </div>
                    </div>
                    <div class="ou">
                        ou
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
            </div>
        </div>     
        <div class="footer">
        <span class="span">00kngrliniotnùotihigùhoipjt0</span>
        </div>
        <script src="./index.js"></script>
    </body>
</html>
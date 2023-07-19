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
    <div class="insc" id="inscript">
        </div>
        <div class="inscf" id="forum">
            <div class="delete">
                <input class="dell" onClick="delet2()" type="button" value="X">
            </div>
            <img class="img" src="./assets/logotwitterC.png" alt=""></img>  
            <h3 style="margin-left: 100px; position:relative; bottom:20px;">Créer votre compte.</h3>
            <div class="form">
                <form method="POST" action="./traitement.php" name="formulaire" >
                    <div class="sec">
                        <input type="text" id="nom" name="nom" placeholder="Nom et prenom" required>
                    </div>
                    <div class="sec">
                        <input type="email" id="email" name="email" placeholder="Votre@email.fr" required>
                    </div>
                    <div class="sec">
                        <input type="password" id="pass" name="pass" placeholder="******" required>
                    </div> 
                    <div class="sec">
                    <input type="text" id="pseudo" name="pseudo" placeholder="pseudo" required>
                </div>
                <div class="sec">
                    <input type="date" id="birthday" name="birthday" required>
                </div>
                <input class="svt" type="submit" name="submit" id="submit" value="Suivant" required> 
            </form>
        </div>
        </div>
        <div class="connection" id="divcacher" style="display:none;"></div>
        <div class="opt" id="opt"  style="display:none;"> 
            <div class="delete">
                <input class="del" onClick="delet()" type="button" value="X">
            </div>
            <img class="logo-bleu" src="./assets/logotwitter.png" alt></img>
            <div class="left">
                <h3>Connectez vous a<br> Twitter</h3>
                <form method="POST" action="./logintraite.php">
                    <div class="btnT">
                    <div>
                        <input type="email" id="emaill" name="email" placeholder="email" required>
                    </div>
                    <div>
                        <input type="password" id="password" name="password" placeholder="password" required>
                    </div>
                    </div>
                    <div class="btnConnect">
                        <input  type="submit" value="Suivant" name="ok">
                    </div>
                </form>
                <div>
                    <p>Vous n'avez pas de compte ? <a href="Acceuil.php" onClick="inscription();">Inscrivez-vous</a></p>
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
                        <input onClick="inscription()" type="submit" value="Creer un compte">
                    </div>
                    <div class="spanSign">
                        <span>
                            En vous inscrivant, vous acceptez les Conditions<br> d'Utilisation et la Politique de Confidentialité, incluant<br> l'Utilisation de Cookies.
                        </span>
                    </div>
                </div>
                <div class="connect">
                    <h4>Vous avez déjà un compte ?</h4><br>
                    <input style="font-weight:bold; color:#1DA1F2;"onClick="AfficherMasquer()" type="button" value="Se connecter" >
                </div>      
            </div>
        </div>     
        <div class="footer">
            <span class="span">00kngrliniotnùotihigùhoipjt0</span>
        </div>
        <script src="./index.js"></script>
</body>
</html>
<?php

class connect{

    public function checkUser()
    {
        session_start();
        if(isset($_POST['nom']) && isset($_POST['password']))
        {
            $db_username = 'hamzat';
            $db_password = 'WEB@C';
            $db_name     = 'common-database';
            $db_host     = 'localhost';
            $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
                   or die('could not connect to database');


            $pseudo = mysqli_real_escape_string($db, htmlspecialchars($_POST["nom"]));
            $email = mysqli_real_escape_string($db, htmlspecialchars($_POST["email"]));
            $password =  mysqli_real_escape_string($db, htmlspecialchars($_POST["password"]));

            if($pseudo !== "" && $password !== "")
            {
                $requete = "SELECT count(*) FROM users WHERE username = '".$pseudo."' AND password = '".$password."' ";
                $exec_requete = mysqli_query($db,$requete);
                $reponse = mysqli_fetch_array($exec_requete);
                $count = $reponse["count(*)"];
                if($count !=0)
                {
                    $_SESSION["user_id"] = $pseudo;
                    header("Location: login.php");
                }
                else {
                    header('Location: connexion.php?erreur=1');
                }
            }
            else {
                header('Location: connexion.php?erreur=2');
            }
        }
        else
        {
            header('Location: connexion.php');
        }
    }
}
$var = new connect;
$var->checkUser(); 
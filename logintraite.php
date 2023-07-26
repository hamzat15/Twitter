<?php

class connect{

    public function checkUser()
    {
        session_start();
        if(isset($_POST['email']) && isset($_POST['password']))
        {
            $db_username = 'hamzat';
            $db_password = 'WEB@C';
            $db_name     = 'twitter';
            $db_host     = 'localhost';
            $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
                   or die('could not connect to database');


            $email = mysqli_real_escape_string($db, htmlspecialchars($_POST["email"]));
            $password =  mysqli_real_escape_string($db, htmlspecialchars($_POST["password"]));
            $password = md5($password);

            if($email !== "" && $password !== "")
            {
               // $requete = "SELECT * FROM users WHERE email = '".$email."' AND mdp = '".$password."'";
                $requete = "SELECT * FROM users INNER JOIN info_users ON users.id = info_users.id_users WHERE email = '".$email."' AND mdp = '".$password."'";

                $exec_requete = mysqli_query($db,$requete);
                $reponse = mysqli_fetch_array($exec_requete);
                if($reponse)
                {
                    $_SESSION["user_id"] = $reponse["id"];
                    $_SESSION["nom"] = $reponse["nom"];
                    $_SESSION["email"] = $reponse["email"];
                    $_SESSION["pseudo"] = $reponse["pseudo"];
                    $_SESSION["photo"] = $reponse["photo"];
                    $_SESSION["biographie"] = $reponse["biographie"];


                    header("Location: login.php");
                }
                else {
                    header('Location: Acceuil.php?erreur=1');
                    echo "error 1";
                }
            }
            else {
                header('Location: Acceuil.php?erreur=2');
                echo "error 2";
            }
        }
        else
        {
            header('Location: Acceuil.php');
            echo "error 3";
        }
    }
}
$var = new connect;
$var->checkUser(); 
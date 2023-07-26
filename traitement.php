<?php
include("./pdo.php");
$db_username = 'hamzat';
            $db_password = 'WEB@C';
            $db_name     = 'twitter';
            $db_host     = 'localhost';
            $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
                   or die('could not connect to database');

if([isset($_POST["submit"])]){

    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $pass = md5($_POST["pass"]);
    $pseudo = "@".$_POST["pseudo"];
    $birthday = $_POST["birthday"];
    $photo = "default.png";

    
    $aa ="INSERT INTO users (nom,email,mdp,pseudo,birthday) VALUES (?,?,?,?,?)";
    $stm = $con->prepare($aa);
    $stm->bindParam(1,$nom);
    $stm->bindParam(2,$email);
    $stm->bindParam(3,$pass);
    $stm->bindParam(4,$pseudo);
    $stm->bindParam(5,$birthday);
    $stm->execute();

    
        $requete = "SELECT id FROM users WHERE email ='".$email."'";
        $exec_requete = mysqli_query($db, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        if($reponse)
        {
            $_SESSION["user_id"] = $reponse["id"];
        };
        $requete2 = "INSERT INTO info_users (photo, id_users) VALUES (?,?)";    
            $stma = $con->prepare($requete2);
            $stma->bindParam(1,$photo);
            $stma->bindParam(2, $_SESSION["user_id"]);
            $stma->execute();
    
        echo "inscription reussi";
}

?>
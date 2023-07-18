<?php
include("./pdo.php");

if([isset($_POST["submit"])]){

    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $pass = md5($_POST["pass"]);
    $pseudo = $_POST["pseudo"];
    $birthday = $_POST["birthday"];

    $aa ="INSERT INTO users (nom,email,mdp,pseudo,birthday) VALUES (?,?,?,?,?)";
     $stm = $con->prepare($aa);
     $stm->bindParam(1,$nom);
     $stm->bindParam(2,$email);
     $stm->bindParam(3,$pass);
     $stm->bindParam(4,$pseudo);
     $stm->bindParam(5,$birthday);
     $stm->execute();
 

    echo "inscription reussi";

}

?>
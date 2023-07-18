<?php

$user = "root";
$pass = "";

try{
    $con = new PDO('mysql:host=localhost;dbname=twitter', $user, $pass);
    return $con;
    }
    catch (PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>";
    }
  

  // public function addUser()
  // {
  //   $nom = $_POST["nom"];
  //   $date = $_POST["birthday"];
  //   $email = $_POST["email"];
  //   $password = $_POST["password"];
  //   $pseudo = "@".$_POST["pseudo"];
  //   $picture = "default.png";

  //  if(!empty($_POST))
  //   {
  //   $aa ="INSERT INTO users (fullname,birthdate,email,password,username,picture) VALUES (?,?,?,?,?,?)";
  //   $con  = $this->connect();
  //   $stm = $con->prepare($aa);
  //   $stm->bindParam(1,$nom);
  //   $stm->bindParam(2,$date);
  //   $stm->bindParam(3,$email);
  //   $stm->bindParam(4,$password);
  //   $stm->bindParam(5,$pseudo);
  //   $stm->bindParam(6,$picture);
  //   $stm->execute();
  //   }

  // }

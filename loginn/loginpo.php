<?php

    session_start();
    $host = 'localhost';
    $dbname = 'common-database';
    $username = 'hamzat';
    $password = 'WEB@C';
          
    $dsn = "mysql:host=$host;dbname=$dbname"; 
    // récupérer tous les utilisateurs

    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['user_id']."'"; 
    try{
        $db = new PDO($dsn, $username, $password);
        $stmt = $db->query($sql);
                
        if($stmt === false){
            die("Erreur");
        }    
        }catch (PDOException $e){
            echo $e->getMessage();
        }          
?>

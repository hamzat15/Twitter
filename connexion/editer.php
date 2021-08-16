<?php

   session_start();
   $connection = new PDO("mysql:host=localhost;dbname=common-database", "hamzat", "WEB@C");
   if(isset($_SESSION['user_id'])|| true){
      if(isset($_FILES['picture']) AND !empty($_FILES['picture']['name'])) {
         $tailleMax = 2097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['picture']['size'] <= $tailleMax) {
           $extensionUpload = strtolower(substr(strrchr($_FILES['picture']['name'], '.'), 1));
           if(in_array($extensionUpload, $extensionsValides)) {
             
            $dossier = 'membres/avatars/';
            $fichier = basename($_FILES['picture']['name']);
            if(move_uploaded_file($_FILES['picture']['tmp_name'], $dossier.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
               try{       
                  $updateavatar = $connection->prepare("UPDATE users SET picture = :avatar WHERE username ='".$_SESSION['user_id']."'");
                  $updateavatar->execute(array(
                  'avatar' => $_FILES['picture']['name'],
                  ));
                 header('Location: login.php?id='.$_SESSION['user_id']);
               }
               catch (PDOException $e){
               print "Erreur !: " . $e->getMessage() . "<br/>";
               die();
               }
            }
            else 
            {
               echo 'Echec de l\'upload !';
            }

             
           } else {
              echo "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
           }
        } else {
           echo "Votre photo de profil ne doit pas dépasser 2Mo";
        }
     }
   

      if(isset($_POST["biographie"]) AND !empty($_POST["biographie"]))
      {
         $dst = $connection->prepare('SELECT user_id FROM users WHERE username = ?');
         $dst->execute(array($_SESSION["user_id"]));
         $dst = $dst->fetch();            
         $dst = $dst["user_id"];

         $bio = htmlspecialchars($_POST["biographie"]);
         var_dump($dst);
         try {
            $insert = $connection->prepare("UPDATE users SET biography = :biographie WHERE username ='".$_SESSION['user_id']."'");
            $insert->execute(array(
            'biographie' => $bio,
         ));
          header('Location: login.php?id='.$_SESSION['user_id']);
         }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
         }
        

      }else{
         echo "Veuiller remplire tout les champs";
      }

      if(isset($_FILES['banner']) AND !empty($_FILES['banner']['name'])) {
         $tailleMax = 2097152;
        $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
        if($_FILES['banner']['size'] <= $tailleMax) {
           $extensionUpload = strtolower(substr(strrchr($_FILES['banner']['name'], '.'), 1));
           if(in_array($extensionUpload, $extensionsValides)) {
             
            $dossier = 'membres/avatars/';
            $fichier = basename($_FILES['banner']['name']);
            if(move_uploaded_file($_FILES['banner']['tmp_name'], $dossier.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
               try{       
                  $updateavatar = $connection->prepare("UPDATE users SET banner = :avatar WHERE username ='".$_SESSION['user_id']."'");
                  $updateavatar->execute(array(
                  'avatar' => $_FILES['banner']['name'],
                  ));
                 header('Location: login.php?id='.$_SESSION['user_id']);
               }
               catch (PDOException $e){
               print "Erreur !: " . $e->getMessage() . "<br/>";
               die();
               }
            }
            else 
            {
               echo 'Echec de l\'upload !';
            }

             
           } else {
              echo "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
           }
        } else {
           echo "Votre photo de profil ne doit pas dépasser 2Mo";
        }
     }


   }else{
      echo "erreur d'identiter";
   }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   <body>
      <form method="POST" enctype="multipart/form-data">
         <label for="fileUpload">Avatar :</label>
         <input type="file" name="picture" /><br><br>

         <label for="fileUpload">banniere :</label>
         <input type="file" name="banner"><br><br>
   
         <textarea maxlength="140" name="biographie" style="width: 309px; height: 100px" placeholder="BIO" >
         </textarea>
         <input type="submit" value="envoie"/>
      </form>
   </body>
</html>
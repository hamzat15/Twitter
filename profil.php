<?php
$conn = new PDO("mysql:host=localhost;dbname=twitter", "hamzat", "WEB@C");
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
               $updateavatar = $conn->prepare("UPDATE info_users SET photo = :avatar  WHERE id_users ='".$_SESSION['user_id']."'");
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

}
    $headertext = '
    <div class="back" id="back">
    </div>
    <div class="editee" id="edite">
        <div class="delete">
            <input class="del" onClick="delet()" type="button" value="X">
        </div>
        <form method="POST" enctype="multipart/form-data">
            <label for="fileUpload">Avatar :</label>
            <input type="file" name="picture" /><br><br>

            <label for="fileUpload">banniere :</label>
            <input type="file" name="banner"><br><br>

            <textarea maxlength="140" name="biographie" style="width: 309px; height: 100px" placeholder="BIO" >
            </textarea>
            <input type="submit" value="envoie"/>
        </form>
    </div>
    <div class="btnedit">
        <input onClick="edit()" type="submit"  value="éditer le profil"/>
    </div>
    '
?>
<?php
    include('test.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="profil.css" rel="stylesheet">
    <title>Twitter</title>
</head>
<body>
<script src="./profil.js"></script>
</body>
</html>
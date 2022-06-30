 <?php
    require_once "loginpo.php";
    session_start();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
         
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css"></link>
    <title>Document</title>
</head>
<body>
    <div id="content">
        <?php

            if(isset($_SESSION["user_id"]))
            {
        ?>          
                <a href="">Suivre</a>
            <?php
            }
            ?>     


        <?php 
            echo "<p>".htmlspecialchars($row["username"])."</p>"; 
        ?>
        <?php
            echo "<p style ='color: grey'>".htmlspecialchars($row["birthdate"])."</p>"; 
        ?>
        
        <?php
            if(!empty($row["picture"]))
            {
            ?>
                <img src="membres/avatars/<?php echo $row["picture"];?>" class="rounded"/>
            <?php
            }
            if(!empty($row["biography"]))
            {
                echo "<p>".$row['biography']."</p>";
            }
        ?>
        <?php endwhile; ?>
        
        <form method="POST" action="">
            <textarea  maxlength="140" name="tweet" style="width: 309px; height: 100px" placeholder="Quoi de neufs?" >
            </textarea>
            <input type="submit" name="tweet" value="tweet">
            <?php
                if(isset($_POST["tweet"]) AND !empty($_POST["tweet"])){

                    $id = $connection->prepare('SELECT user_id FROM users WHERE username = ?');
                    $id->execute(array($_SESSION["user_id"]));
                    $id = $id->fetch();
                    $id = $id["user_id"];
                    

                    $tweet = htmlspecialchars($_POST["tweet"]);
                    $insert = "INSERT INTO tweets(user_id, content) VALUES (?,?)";
                        $stm = $connection->prepare($insert);
                        $stm->bindParam(1,$id);
                        $stm->bindParm(2,$tweet);
                        $stm->execute();
                }
            ?>
        </form>

        <form method="POST">
            <input type ="search" name ="nom" placeholder="Recherche.." />
        <?php
            $connection = new PDO(
            "mysql:host=localhost;dbname=common-database", "hamzat", "WEB@C");

            if(isset($_POST["nom"]) AND !empty($_POST["nom"])){
                $q = htmlspecialchars($_POST["nom"]); 
                $result =  $connection->query("SELECT * FROM users WHERE username LIKE '%$q%'");
                foreach($result as $row)
                {
                    echo "<br><img src='membres/avatars/".$row['picture']."' class='rounded'/>".$row['username']." <i style=color:grey>".$row['fullname']."</i><br>";
                }        
            }
        ?>
        </form>
        <form action="messagerie.php">
            <input type="submit" value="Message"></input>
        </form>

            
        <a href="reception.php?editer=true"><span>Boite de reception</span></a>
        <a href="editer.php?editer=true"><span>Editer le profil</span></a>
        <?php
                if($_GET['editer']==true)
                {  
                    header("location:editer.php");
                }

        ?>

        <a href='connexion.php?deconnexion=true'><span>Déconnexion</span></a>
        <?php
            if(isset($_GET['deconnexion']))
            { 
                if($_GET['deconnexion']==true)
                {  
                    header("location:connexion.php");
                }
            }
        ?>

        
    </div>
</body>
</html>
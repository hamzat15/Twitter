<?php

include("./pdo.php");
session_start();
if($_SESSION["user_id"]){

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
        <link rel="short icon" href="./assets/logotwitter.png"/> 

</head>
<body>
<h1>Bienvenue <?php echo htmlspecialchars($_SESSION["nom"]); ?></h1>
 <table>
   <thead>
     <tr>
       <th>Name</th>
       <th>Mail</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td><?php echo htmlspecialchars($_SESSION["pseudo"]); ?></td>
       <td><?php echo htmlspecialchars($_SESSION["email"]); ?></td>
     </tr>
   </tbody>
 </table>

 <a href='Acceuil.php?deconnexion=true'><span>Déconnexion</span></a>
        <?php
            if(isset($_GET['deconnexion']))
            { 
                if($_GET['deconnexion']==true)
                {  
                    header("location:Acceuil.php");
                }
            }
        ?>
    
</body>
</html>


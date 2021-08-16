<?php
    session_start();
    
    $connection = new PDO("mysql:host=localhost;dbname=common-database", "hamzat", "WEB@C");

    if(isset($_SESSION["user_id"]) AND !empty($_SESSION["user_id"])){
        
    if(isset($_POST["msg"])){
        
        if(isset($_POST["pseudo"],$_POST["content"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["content"])){
            $destinateurs = htmlspecialchars($_POST["pseudo"]);
            $message = htmlspecialchars($_POST["content"]);

            $id_destinataire = $connection->prepare('SELECT user_id FROM users WHERE username = ?');
            $id_destinataire->execute(array($destinateurs));
            $id_destinataire = $id_destinataire->fetch();
            $id_destinataire = $id_destinataire["user_id"];

            $dst = $connection->prepare('SELECT user_id FROM users WHERE username = ?');
            $dst->execute(array($_SESSION["user_id"]));
            $dst = $dst->fetch();
            $dst = $dst["user_id"];
            
            $insert = $connection->prepare('INSERT INTO messages(user_id, receiver_id, content) VALUES (?,?,?)');
            $insert->execute(array($dst, $id_destinataire, $message));

            echo "Votre messages a bien etait envoyer";

        }else{
            echo "Veuiller completer tout les champs";
        }
    }

    $destinateur = $connection->query('SELECT username FROM users ORDER BY username');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="POST">
        <select name="pseudo">
            <?php while($d = $destinateur->fetch()){ ?>
                <option><?=$d["username"]?></option>
           <?php } ?>
        </select>
        <br><br>
        <textarea placeholder="Votre message" name="content"></textarea>
        <input type="submit" value="Envoie" name="msg"/>
    </form>
</body>
</html>

<?php
    }
?>
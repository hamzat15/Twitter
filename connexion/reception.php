<?php
    session_start();
    $connection = new PDO("mysql:host=localhost;dbname=common-database", "hamzat", "WEB@C");

    if(isset($_SESSION["user_id"]) AND !empty($_SESSION["user_id"])){
    $int = $connection->prepare('SELECT user_id FROM users WHERE username = ?');
    $int->execute(array($_SESSION["user_id"]));
    $int = $int->fetch();
    $int = $int["user_id"];
    
    $msg = $connection->prepare('SELECT * FROM messages WHERE receiver_id = ?');
    $msg->execute(array($int));
    $msg_nbr = $msg->rowCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boite de reception</title>
</head>
<body>
        <form action="messagerie.php">
            <input type="submit" value="Envoyer un message"></input>
        </form>
    <?php 
        if($msg_nbr == 0){echo "Vous n'avez aucun message...";}

        while($m = $msg->fetch()) {
        $p_ex = $connection->prepare('SELECT username FROM users WHERE user_id = ?');
        $p_ex->execute(array($m["user_id"]));
        $p_ex = $p_ex->fetch();
        $p_ex = $p_ex["username"];
    ?>
    <b><?= $p_ex ?></b> Vous a envoyer: <br />
    <?= $m['content']?><br />
    
    -----------------------------------------------------<br />
    
    <?php } ?>
</body>
</html>
<?php } ?>
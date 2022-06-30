<?php

function search()
{ 
    $nom = $dsn->query("SELECT * FROM users");
    if(isset($_POST["nom"]) AND !empty($_POST["nom"])){
        $n = htmlspecialchars($POST["nom"]);
        $nom = $dsn->query();
    }
} search();
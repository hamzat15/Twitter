<?php
if(empty($headertext)) $headertext = "";
include("./pdo.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">

    <title>Twitter</title>
    <link rel="short icon" href="./assets/logotwitter.png"/> 

</head>
<body>
    <div class="main">
        <div class="left">
            <div class="opt">
                <div class="icont">
                    <svg class="blue" viewBox="0 0 34 34">
                        <g><path  id="time-3-icon" d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g>
                    </svg>
                </div>
                <nav class="nav">
                    <a href="login.php">
                        <div class="icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                <path d="M12 1.696L.622 8.807l1.06 1.696L3 9.679V19.5C3 20.881 4.119 22 5.5 22h13c1.381 0 2.5-1.119 2.5-2.5V9.679l1.318.824 1.06-1.696L12 1.696zM12 16.5c-1.933 0-3.5-1.567-3.5-3.5s1.567-3.5 3.5-3.5 3.5 1.567 3.5 3.5-1.567 3.5-3.5 3.5z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="span">
                            <span class="text">Acceuil</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g>
                            <path d="M10.25 3.75c-3.59 0-6.5 2.91-6.5 6.5s2.91 6.5 6.5 6.5c1.795 0 3.419-.726 4.596-1.904 1.178-1.177 1.904-2.801 1.904-4.596 0-3.59-2.91-6.5-6.5-6.5zm-8.5 6.5c0-4.694 3.806-8.5 8.5-8.5s8.5 3.806 8.5 8.5c0 1.986-.682 3.815-1.824 5.262l4.781 4.781-1.414 1.414-4.781-4.781c-1.447 1.142-3.276 1.824-5.262 1.824-4.694 0-8.5-3.806-8.5-8.5z"></path>
                            </g>
                        </svg>
                        </div>
                        <div class="span">
                            <span class="text">Explorer</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g><path d="M19.993 9.042C19.48 5.017 16.054 2 11.996 2s-7.49 3.021-7.999 7.051L2.866 18H7.1c.463 2.282 2.481 4 4.9 4s4.437-1.718 4.9-4h4.236l-1.143-8.958zM12 20c-1.306 0-2.417-.835-2.829-2h5.658c-.412 1.165-1.523 2-2.829 2zm-6.866-4l.847-6.698C6.364 6.272 8.941 4 11.996 4s5.627 2.268 6.013 5.295L18.864 16H5.134z"></path></g>
                        </svg>
                        </div>
                        <div class="span">
                            <span class="text">Messages</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g><path d="M1.998 5.5c0-1.381 1.119-2.5 2.5-2.5h15c1.381 0 2.5 1.119 2.5 2.5v13c0 1.381-1.119 2.5-2.5 2.5h-15c-1.381 0-2.5-1.119-2.5-2.5v-13zm2.5-.5c-.276 0-.5.224-.5.5v2.764l8 3.638 8-3.636V5.5c0-.276-.224-.5-.5-.5h-15zm15.5 5.463l-8 3.636-8-3.638V18.5c0 .276.224.5.5.5h15c.276 0 .5-.224.5-.5v-8.037z"></path></g>
                        </svg>
                        </div>
                        <div class="span">
                            <span class="text">Messages</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g><path d="M3 4.5C3 3.12 4.12 2 5.5 2h13C19.88 2 21 3.12 21 4.5v15c0 1.38-1.12 2.5-2.5 2.5h-13C4.12 22 3 20.88 3 19.5v-15zM5.5 4c-.28 0-.5.22-.5.5v15c0 .28.22.5.5.5h13c.28 0 .5-.22.5-.5v-15c0-.28-.22-.5-.5-.5h-13zM16 10H8V8h8v2zm-8 2h8v2H8v-2z"></path></g>
                            </svg>
                        </div>
                        <div class="span">
                            <span class="text">Listes</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g><path d="M8.52 3.59c.8-1.1 2.04-1.84 3.48-1.84s2.68.74 3.49 1.84c1.34-.21 2.74.14 3.76 1.16s1.37 2.42 1.16 3.77c1.1.8 1.84 2.04 1.84 3.48s-.74 2.68-1.84 3.48c.21 1.34-.14 2.75-1.16 3.77s-2.42 1.37-3.76 1.16c-.8 1.1-2.05 1.84-3.49 1.84s-2.68-.74-3.48-1.84c-1.34.21-2.75-.14-3.77-1.16-1.01-1.02-1.37-2.42-1.16-3.77-1.09-.8-1.84-2.04-1.84-3.48s.75-2.68 1.84-3.48c-.21-1.35.14-2.75 1.16-3.77s2.43-1.37 3.77-1.16zm3.48.16c-.85 0-1.66.53-2.12 1.43l-.38.77-.82-.27c-.96-.32-1.91-.12-2.51.49-.6.6-.8 1.54-.49 2.51l.27.81-.77.39c-.9.46-1.43 1.27-1.43 2.12s.53 1.66 1.43 2.12l.77.39-.27.81c-.31.97-.11 1.91.49 2.51.6.61 1.55.81 2.51.49l.82-.27.38.77c.46.9 1.27 1.43 2.12 1.43s1.66-.53 2.12-1.43l.39-.77.82.27c.96.32 1.9.12 2.51-.49.6-.6.8-1.55.48-2.51l-.26-.81.76-.39c.91-.46 1.43-1.27 1.43-2.12s-.52-1.66-1.43-2.12l-.77-.39.27-.81c.32-.97.12-1.91-.48-2.51-.61-.61-1.55-.81-2.51-.49l-.82.27-.39-.77c-.46-.9-1.27-1.43-2.12-1.43zm4.74 5.68l-6.2 6.77-3.74-3.74 1.41-1.42 2.26 2.26 4.8-5.23 1.47 1.36z"></path></g>
                        </svg>
                        </div>
                        <div class="span">
                            <span class="text">Signets</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g>
                            <path d="M10.25 3.75c-3.59 0-6.5 2.91-6.5 6.5s2.91 6.5 6.5 6.5c1.795 0 3.419-.726 4.596-1.904 1.178-1.177 1.904-2.801 1.904-4.596 0-3.59-2.91-6.5-6.5-6.5zm-8.5 6.5c0-4.694 3.806-8.5 8.5-8.5s8.5 3.806 8.5 8.5c0 1.986-.682 3.815-1.824 5.262l4.781 4.781-1.414 1.414-4.781-4.781c-1.447 1.142-3.276 1.824-5.262 1.824-4.694 0-8.5-3.806-8.5-8.5z"></path>
                            </g>
                        </svg>
                        </div>
                        <div class="span">
                            <span class="text">Certifié</span>
                        </div>
                    </a>
                    <a href="profil.php">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g><path d="M5.651 19h12.698c-.337-1.8-1.023-3.21-1.945-4.19C15.318 13.65 13.838 13 12 13s-3.317.65-4.404 1.81c-.922.98-1.608 2.39-1.945 4.19zm.486-5.56C7.627 11.85 9.648 11 12 11s4.373.85 5.863 2.44c1.477 1.58 2.366 3.8 2.632 6.46l.11 1.1H3.395l.11-1.1c.266-2.66 1.155-4.88 2.632-6.46zM12 4c-1.105 0-2 .9-2 2s.895 2 2 2 2-.9 2-2-.895-2-2-2zM8 6c0-2.21 1.791-4 4-4s4 1.79 4 4-1.791 4-4 4-4-1.79-4-4z"></path></g>
                        </svg>
                        </div>
                        <div class="span">
                            <span class="text">Profil</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="icon">
                        <svg viewBox="0 0 24 24">
                            <g><path d="M3.75 12c0-4.56 3.69-8.25 8.25-8.25s8.25 3.69 8.25 8.25-3.69 8.25-8.25 8.25S3.75 16.56 3.75 12zM12 1.75C6.34 1.75 1.75 6.34 1.75 12S6.34 22.25 12 22.25 22.25 17.66 22.25 12 17.66 1.75 12 1.75zm-4.75 11.5c.69 0 1.25-.56 1.25-1.25s-.56-1.25-1.25-1.25S6 11.31 6 12s.56 1.25 1.25 1.25zm9.5 0c.69 0 1.25-.56 1.25-1.25s-.56-1.25-1.25-1.25-1.25.56-1.25 1.25.56 1.25 1.25 1.25zM13.25 12c0 .69-.56 1.25-1.25 1.25s-1.25-.56-1.25-1.25.56-1.25 1.25-1.25 1.25.56 1.25 1.25z"></path></g>
                        </svg>
                        </div>
                        <div class="span">
                            <span class="text">plus</span>
                        </div>
                    </a>
                </nav>
                <div class="btn">
                    <input type="submit" value="Tweeter">
                </div>
            </div>
            <div class="profil">
                <div class="profilw">
                    <div class="photo">
                        <img class="rond" src="loginn/membres/avatars/<?php echo $_SESSION["photo"];?>" alt="image_users" >
                    </div>
                    <div class="name">
                    <p style="font-weight: bold;"><?php echo htmlspecialchars($_SESSION["nom"]); ?></p>
                    <p><?php echo htmlspecialchars($_SESSION["email"]); ?></p>
                    </div>
                </div>
            </div>

        </div>
        <div class="middle">
            <p><?php echo $headertext; ?></p>

        </div>
        <div class="right">
            <div class="search">
                <div class="icone"></div>
                <form action="">
                    <label for=""></label>
                    <input type="text" value="Recherche" name="search">
                </form>
            </div>

        </div>
    </div>
 <!-- <table>
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
-->
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


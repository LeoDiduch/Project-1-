<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylemessagerie.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>Messagerie</title>
</head>





<body>



    <header>
        <nav>
            <ul>
                <li><a href="">LOGO</a></li>
            </ul>
            <ul id="menu">
                <li><a href="">Home</a></li>
                <li><a href="barresRecherche.php">Search</a></li>
                <li>Menu
                    <ul id="burger">
                        <li><a href="">Settings</a></li>
                        <li><a href="">help</a></li>
                        <li><a href="message.php">Message</a></li>
                        <li><a href="index.php">Log Out</a></li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
    </header>



    <?php
require 'barreDeContact.php';
?>

        <div id="discussion">
            
        </div>


        <div id="sendMessagerie">
            <textarea id="textMessagerie" name="inputUser" placeholder ="tape here..." cols="30" rows="10"></textarea>
            <div id="boiteEmoticone">
            <ul>
                <li><img class="emoteSelect" id="pageEmote" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t88/1/32/1f600.png" alt="">
                <div id="pageEmoji">bonjour</div>
            </li>              
                <li><img class="emoteSelect" src="https://img.icons8.com/material/4ac144/256/camera.png" alt=""></li>
            </ul>
                
            </div>
        </div>
    </div>
        
    
<script src='messagerie.js'></script>



</body>
</html>
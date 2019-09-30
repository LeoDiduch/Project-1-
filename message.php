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
                <li id='containerEmote'><img class="emoteSelect" id="pageEmote" src="https://static.xx.fbcdn.net/images/emoji.php/v9/t88/1/32/1f600.png" alt="">
            <!--    <div id="pageEmoji">
                    <table>
                        <tr>
                            <th>&#x1F610<div id="x1F610"></div></th>
                            <th>&#x1F600<div id="x1F600"></div></th>
                            <th>&#x1F601<div id="x1F601"></div></th>
                            <th>&#x1F602<div id="x1F602"></div></th>
                            <th>&#x1F603<div id="x1F603"></div></th>
                        </tr>
                        <tr>
                            <th>&#x1F604<div id="x1F604"></div></th>
                            <th>&#x1F605<div id="x1F605"></div></th>
                            <th>&#x1F606<div id="x1F606"></div></th>
                            <th>&#x1F607<div id="x1F607"></div></th>
                            <th>&#x1F608<div id="x1F608"></div></th>
                        </tr>
                        <tr>
                            <th>&#x1F609<div id="x1F609"></div></th>
                            <th>&#x1F611<div id="x1F611"></div></th>
                            <th>&#x1F612<div id="x1F612"></div></th>
                            <th>&#x1F613<div id="x1F613"></div></th>
                            <th>&#x1F614<div id="x1F614"></div></th>
                        </tr>
                    </table>
                </div> 
                -->
            </li>              
                <li><img class="emoteSelect" src="https://img.icons8.com/material/4ac144/256/camera.png" alt=""></li>
            </ul>
                
            </div>
        </div>
    </div>
        
    
<script src='messagerie.js'></script>



</body>
</html>
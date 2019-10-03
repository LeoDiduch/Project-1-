<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylemessagerie.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>Messagerie</title>
</head>stylenav.css




=======
<?php
$title = "Messagerie";
$css = "stylemessagerie.css";
require "header.php";
?>
>>>>>>> 6f6ac591769881338623f324572d373f8b452fe3

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



        <textarea id="textMessagerie" name="inputUser" placeholder ="tape here..." cols="30" rows="10"></textarea>
    </div>
        
    
<script src='messagerie.js'></script>



</body>
</html>
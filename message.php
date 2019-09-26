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


    <?php 
require 'header.php';
?>

    </header>



    <?php
require 'barreDeContact.php';
?>

        <div id="discussion">
            
        </div>
        <textarea id="textMessagerie" name="inputUser" placeholder ="tape here..." cols="30" rows="10"></textarea>
    </div>
        
    
    




    <footer>
        <ul id="footerlink">
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Terms</a></li>
            <li><a href="">About</a></li>
        </ul>
            
        <ul id="footerlogo">
            <a href="default.asp">
                <img src="https://en.facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png" alt="FB">
            </a>


            <a href="default.asp">
                <img src="https://instagram-brand.com/wp-content/uploads/2016/11/Instagram_AppIcon_Aug2017.png?w=300" alt="Insta">
            </a>
        </ul>





    </footer>


    <script src="messagerie.JS"></script>


</body>
</html>
<?php

include "profil.php";
$title = "Resultat de recherche";
$css = "resultat.css";
$css2 = "stylenav.css";
require "header.php";
?>


<body>
    <div id="contenu">
        <div id="milieu de page">

            <?php
                foreach ($profils as $pseudo => $contenu) {
            ?>

            <div class="profil">
                <div class="avatar">
                    <img src="<?= $contenu[0]?>" alt="">
                </div>
                <div id="descrip">
                    <h2><i><?= $pseudo ?></i></h2>
                    <h3>
                        <?= $contenu[1] ?>
                    </h3>
                    <button type="button">Code Moi</button>
                </div>
            </div>

            <?php
            }
            ?>
<!-- SAUVEGARDE DE LA DIV QUE J'ESSAYE D'AUTOMATISER EN PHP

            <div class="profil">
                <div class="avatar">
                    <img src="https://www.cofondateur.fr/assets/img/testi_marc.jpg" alt="woman">
                </div>
                <div id="descrip">
                    <h2><i>Name</i></h2><h3>Lorem ipsum dolor sit amet consectetur...
                </h3>
                    <button type="button">Code Moi</button>
                </div>
            </div>
 -->
     <!--       <div class="profil">
                <div class="avatar">
                    <img src="https://www.cofondateur.fr/assets/img/testi_sibylle.jpg" alt="Man1">
                </div>
                <div id="descrip">
                    <h2><i>Name</i></h2><h3>Lorem ipsum dolor sit amet consectetur...</h3>
                    <button type="button">Code Moi</button>
                </div>
            </div>
            <div class="profil">
                <div class="avatar">
                    <img src="https://www.cofondateur.fr/assets/img/testi_charles.jpg" alt="Man2">
                </div>
                <div id="descrip">
                    <h2><i>Name</i></h2><h3>Lorem ipsum dolor sit amet consectetur...</h3>
                    <button type="button">Code Moi</button>
                </div>
            </div>
    -->
        </div>
    </div>
            

    <div id="contact">
        <ul>
            <li ><span class="center"><a href="message.php"> patrick</a></span> <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/17626096_1123132934465589_5087028253921373571_n.jpg?_nc_cat=108&_nc_oc=AQn372nL-XcWXjTMv1BoY2DD8DpT7vMWJhzDqG3Mj_9SVfzhAOQ7ljgs950aPZi77jM&_nc_ht=scontent-frx5-1.xx&oh=337dd72beb2e70fafa0bcaa1f4a7c10c&oe=5E08FE47" alt=""></li>
            <li><span class="center"><a href="message.php">Wilderdu17</a></span><img src="https://image.noelshack.com/fichiers/2019/38/3/1568795365-femme3.jpg" alt=""></li>
            <li><span class="center"><a href="message.php">Philibert</a></span><img src="https://pbs.twimg.com/profile_images/700090789859299330/ZlAlKJGA_400x400.jpg" alt=""></li>
            <li><span class="center"><a href="message.php">Панихида</a></span><img src="https://image.noelshack.com/fichiers/2019/38/3/1568795379-homme4.jpeg" alt=""></li>
            <li><span class="center"><a href="message.php"> 塩フな</a></span><img src="https://microapp.com/images/visuels/volume_recadre/500/10341IP.jpg" alt=""></li>
            <li><span class="center"><a href="message.php">jecodeWCS</a></span><img src="https://vignette.wikia.nocookie.net/babar/images/2/28/1--S78iSFaDtxqWvqj_4NM6w.jpeg/revision/latest?cb=20190606040339" alt=""></li>
            <li><span class="center"><a href="message.php">frédo</a></span><img src="https://platinumlist.net/upload/artist/xronnie_coleman_255-mobile.jpg.pagespeed.ic.6Hgt3eVpOg.jpg" alt=""></li>
            <li><span class="center"><a href="message.php">jean louis</a></span><img src="" alt=""></li>
            <li><span class="center"><a href="message.php">bogossdu17</a></span><img src="" alt=""></li>
            <li><span class="center"><a href="message.php">Батюшка</a></span><img src="" alt=""></li>
        </ul>
        <input id="recherche" type="type here" placeholder="recherche">
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
      <script src="resultat.js"></script>
    </footer>

</body>
</html>


<?php
require 'header.php';
?>
    <body>
    <main>

   <div id="boxrecherche">
    
      <div class="Recherche">

         <input class="Centres" type="text" value="Ville" onfocus="if (this.value == 'Ville') this.value = '';"
 onblur="if (this.value == '') this.value = 'Ville';" />
            
         <p></p>

         <select name="Tranches d'âges" class="TranchesDages">
          <option>Tranche d'âge</option>
          <option>18-30</option>
          <option>31-45</option>
          <option>46-60</option>
          <option>61+</option> 
         </select>

        <p></p>


         <select name="langages" class="langages">
          <option>Langages</option>
          <option>HTML</option>
          <option>CSS</option>
          <option>Javascript</option>
          <option>PHP</option>
          <option>Autres...</option>
         </select>

        <p></p>
        

         <select name="compétences" class="competences">
          <option>Compétences</option>
          <option>UX design</option>
          <option>Gestion de projet</option>
          <option>Rédaction de cahier des charges</option>
         </select>

        <p></p>
 
        <label for="Centres">Centres d'intérêts:</label>
        <input class="Centres" type="text"/>

      <p></p>
      <a href="resultat.html" target="_blank"> <input type="button" value="Rechercher" class="boutonRecherche"> </a>

      </div>

    </div>

 <div id="contact">
        <ul>
            <li ><span class="center"><a href="message.html"> patrick</a></span> <img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/17626096_1123132934465589_5087028253921373571_n.jpg?_nc_cat=108&_nc_oc=AQn372nL-XcWXjTMv1BoY2DD8DpT7vMWJhzDqG3Mj_9SVfzhAOQ7ljgs950aPZi77jM&_nc_ht=scontent-frx5-1.xx&oh=337dd72beb2e70fafa0bcaa1f4a7c10c&oe=5E08FE47" alt=""></li>
            <li><span class="center"><a href="message.html">Wilderdu17</a></span><img src="https://image.noelshack.com/fichiers/2019/38/3/1568795365-femme3.jpg" alt=""></li>
            <li><span class="center"><a href="message.html">Philibert</a></span><img src="https://pbs.twimg.com/profile_images/700090789859299330/ZlAlKJGA_400x400.jpg" alt=""></li>
            <li><span class="center"><a href="message.html">Панихида</a></span><img src="https://image.noelshack.com/fichiers/2019/38/3/1568795379-homme4.jpeg" alt=""></li>
            <li><span class="center"><a href="message.html"> 塩フな</a></span><img src="https://microapp.com/images/visuels/volume_recadre/500/10341IP.jpg" alt=""></li>
            <li><span class="center"><a href="message.html">jecodeWCS</a></span><img src="https://vignette.wikia.nocookie.net/babar/images/2/28/1--S78iSFaDtxqWvqj_4NM6w.jpeg/revision/latest?cb=20190606040339" alt=""></li>
            <li><span class="center"><a href="message.html">frédo</a></span><img src="https://platinumlist.net/upload/artist/xronnie_coleman_255-mobile.jpg.pagespeed.ic.6Hgt3eVpOg.jpg" alt=""></li>
            <li><span class="center"><a href="message.html">jean louis</a></span><img src="" alt=""></li>
            <li><span class="center"><a href="message.html">bogossdu17</a></span><img src="" alt=""></li>
            <li><span class="center"><a href="message.html">Батюшка</a></span><img src="" alt=""></li>
            
        </ul>
        <input id="recherche" type="type here" placeholder="recherche">
    </div>


    </main>








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

</body>
</html>
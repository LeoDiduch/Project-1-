<?php
$title = "Recherche";
$css = "styleBarresRecherche.css";
$css2 = "stylenav.css";
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
      <a href="resultat.php" target="_blank"> <input type="button" value="Rechercher" class="boutonRecherche"> </a>

      </div>

    </div>


<?php
require 'barreDeContact.php';
?>


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
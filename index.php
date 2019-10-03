<?php
$title = "Adopte un dev";
$css = "style-acceuil.css";
require "header.php";
?>

<body>

<!-----NAV ET CONNECTION---------->

<div class="banner">
    <div class="diamond">

      <div class="menu">
          <img class="logoresponsive" src="https://hcti.io/v1/image/a0555e82-c66e-410f-b814-c332ca4437c9">
        <nav class="navacceuil">
          
            <ul>
                <li>
                    <label for="pseudo">Pseudo: </label><input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
                </li>
                <li>
                    <label for="motDePasse">Mot de passe: </label><input type="password" name="motDePasse" id="motDePasse" placeholder="Password">
                </li><br>
                <a href="home.php"><input type="submit" class="btn" value="Valider"></a>
            </ul>
        </nav>
    </div>
        <div></div>
      </div>
        <img class="logodesktop" src="https://hcti.io/v1/image/a0555e82-c66e-410f-b814-c332ca4437c9">
  </div>

<!----------SLIDER----------------->

    <div id="slider">
        <h2>Nouveaux Inscrits</h2>
        <figure>
            <img src="https://image.noelshack.com/fichiers/2019/38/3/1568795356-femme1.jpeg" alt="">
            <img src="https://image.noelshack.com/fichiers/2019/38/3/1568795365-femme3.jpg" alt="">
            <img src="https://image.noelshack.com/fichiers/2019/38/3/1568795375-homme2.jpeg" alt="">
            <img src="https://image.noelshack.com/fichiers/2019/38/3/1568795379-homme4.jpeg" alt="">
        </figure>
    </div>

<!--------PROFIL ANCIEN---------->

  <div>
      <div id="milieupage">
          <h2 class="titre-milieuPage">Ils ont trouvé leur collaborateur ici</h2>
          <div class="profil">
              <div class="avatar">
                  <img src="https://image.noelshack.com/fichiers/2019/38/3/1568798972-femme2.jpeg" alt="woman">
              </div>
              <div id="descrip">
                  <h2 class="pseudo-avatar">Anna</h2><h3>Lorem ipsum dolor sit amet consectetur...
                  </h3>
              </div>
          </div>

          <div class="profil">
              <div class="avatar">
                  <img src="https://image.noelshack.com/fichiers/2019/38/3/1568800941-femme4.jpeg" alt="Man1">
              </div>
              <div id="descrip">
                  <h2 class="pseudo-avatar">Beatrice</h2><h3>Lorem ipsum dolor sit amet consectetur...</h3>
              </div>
          </div>

          <div class="profil">
              <div class="avatar">
                  <img src="https://image.noelshack.com/fichiers/2019/38/3/1568808832-homme1.jpeg" alt="Man2">
              </div>
              <div id="descrip">
                  <h2 class="pseudo-avatar">James</h2><h3>Lorem ipsum dolor sit amet consectetur...</h3>
              </div>
          </div>
      </div>
  </div>

<!----------FOOTER---------->

  <footer>
      <ul>
          <li><a href="index.php">Acceuil</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <li><a href="about.php">About</a></li>
      </ul>
  </footer>

</body>
</html>

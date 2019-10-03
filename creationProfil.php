<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resultat.css">
    <link rel="stylesheet" href="stylenav.css">
    <link rel="stylesheet" href="creationProfil.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">LOGO</a></li>
            </ul>

            <ul id="menu">
                <a href="home.html"><li>Home</li></a>
                <li><a href="barresRecherche.html">Search</a></li>
                <li>Menu
                    <ul id="burger">
                        <li><a href="">Settings</a></li>
                        <li><a href="">help</a></li>
                        <li><a href="message.html">Message</a></li>
                        <li><a href="index.html">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main class="creationProfil">
        <h1>
            Création de votre profil
        </h1>
        <div class="">
            <form action="/creationProfil.php" method="post" class="formulaire">
                <label for="pseudo">
                    Veuillez choisir un pseudo:
                </label>
                <input type="text" name="pseudo" placeholder="Pseudo"><br><br>

                <label for="password">
                    Choisissez un mot de passe:
                </label>
                <input type="password" name="password" placeholder="Password"><br><br>

                <label for="">
                    Décrivez vous en quelques lignes:
                </label>
                <textarea name="description" id="description" cols="30" rows="5">
                </textarea><br>
                <input type="submit" value="Envoyer">
            </form>
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

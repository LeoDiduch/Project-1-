<?php
$title = "Création de profil";
$css = "stylenav.css";
$css2 = "creationProfil.css";
include 'header.php';
require_once 'connec.php';

function text_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

// ------------ CONNEXION A LA BASE DE DONNEE----------------

$pdo = new PDO(DNS, USER, PASS);
try {
    $dbh = new PDO(DNS, USER, PASS);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$pseudoError = $mailError = $passwordError = $passwordRepeatError = $msgError  = "";
$pseudo = $mail = $password = $password_repeat = $description = "";

// -------------VERIFICATION DES CHAMPS-----------------

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["pseudo"])) {
        $pseudoError = "Le nom est obligatoire";
    } else {
        $pseudo = text_input($_POST["pseudo"]);
    }
    if (!preg_grep("/^[a-zA-Z ]*$/" , explode(" ",$pseudo))) {
        $pseudoError = "Votre nom doit comporter uniquement des lettres et espaces !";
    }

    if (empty($_POST["mail"])) {
        $mailError = "Le mail est obligatoire";
    } elseif (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $mailError = "Votre adresse n'est pas valide.";
    } else {
        $mail = text_input($_POST["mail"]);
    }

    if (empty($_POST["description"])) {
        $descriptionError = "Le message est obligatoire";
    } else {
        $description = text_input($_POST["description"]);
    }
    if (empty($_POST["password"])) {
        $passwordError = "Le mot de passe est obligatoire";
    } else {
        $password = htmlentities($_POST["password"]);
    }

    if (empty($_POST["password_repeat"])) {
        $passwordError = "Le mot de passe est obligatoire";
    } else {
        $password = htmlentities($_POST['password']);
    }

    if ($password === $password_repeat){
        $password = htmlentities($_POST['password']);
    } else {
        $passwordRepeatError = "Les mots de passes ne correspondent pas";
    }
// ------------ SI AUCUNE ERREUR, RENVOIE VERS LA PAGE HOME -----------------

    if (empty($pseudoErr) && empty($mailErr) && empty($passwordError) && empty($passwordRepeatError)) {
        header("location: home.php");
    } else {
        $error = "Des erreurs se sont produites dans vos champs, vérifiez à nouveau s'il vous plait";
    }
}


?>

<body>

    <main class="creationProfil">
        <h1>
            Création de votre profil
        </h1>
        <div class="">
            <form action="/creationProfil.php" method="post" class="formulaire">
                <label for="pseudo">
                    Veuillez choisir un pseudo:
                </label>
                <input type="text" name="pseudo" placeholder="Pseudo"><br>
                <span class="msgError"><?= $pseudoError ?></span><br>

                <label for="mail">
                    Indiquez votre mail:
                </label>
                <input type="email" name="mail" placeholder="Mail" id="mail"><br>
                <span class="msgError"> <?= $mailError ?></span><br>

                <label for="password">
                    Choisissez un mot de passe:
                </label>
                <input type="password" name="password" placeholder="Password"><br>
                <span class="msgError"><?= $passwordError ?></span><br>

                <label for="password">
                    Veuillez répéter votre mot de passe:
                </label>
                <input type="password" name="password_repeat" placeholder="Password"><br>
                <span class="msgError"><?= $passwordError ?></span><br>

                <label for="description">
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

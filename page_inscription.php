
<?php
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', '');
 
if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mdp = sha1($_POST['mdp']);
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 25) {
      
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {

                     $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, mdp) VALUES (?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé !";
                     
                  } 
                  }
                else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         }
       else {
         $erreur = "Votre pseudo ne doit pas dépasser 25 caractères !";
      }}
    else {
      $erreur = "Tous les champs doivent être complétés !";
    }

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Russo+One&display=swap');
    </style>
    <link rel="stylesheet" href="sitenum/page_inscription.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="sitenum/images/icon.png">
    <title>Inscription</title>
</head>

  

<body>

 <!-- Header -->
<header id="header">
        <div class="left">
            <a class="logo" href="index.html">Chantier du numérique</a>
        </div>
        <div class="right">
            <ul class="menu">
                <li class="title">
                    <a href="">Menu</a>
                    <ul class="sous_menu">
                        <li class="links"><a href="index.php">Acceuil</a></li>
                        <li class="links"><a href="page_inscription.php">Inscription</a></li>
                        <li class="links"><a href="page_connexion.php">Connexion</a></li>
                        <li class="links"><a href="goupil/php/home.php">Arcayk</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>


    <!-- Content
            ================================================== -->
    <div class="page-content">
        <div class="page-content-inner">

            <div class="uk-width-2-5@m m-auto my-5">
                <div class="mb-4">
                    <h2 class="mb-0">Inscription</h2>
                    <p class="my-0">Accédez à toutes les fonctionnalités du site.</p>
                </div>
                <form class="default-ajax" data-recaptcha-v3-action="register" method="POST" action="">
                    <input type="hidden" name="token" value="8ad90566d885769e62556852238c5bd9d0ce09040843a46c33ac8fce4f1870a5">
                    <div class="uk-card uk-card-default uk-card-body">
                        <div class="uk-form-group">
                            <label class="uk-form-label" id="pseudo">Pseudo</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="pseudoicon"></i>
                                        </span>
                                <input class="uk-input" type="text" name="pseudo" placeholder="Votre pseudo" autofocus required>
                            </div>
                        </div>

                        <div class="uk-form-group">
                            <label class="uk-form-label" id="mail">Email</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                <i class="mailicon"></i>
                                        </span>
                                <input class="uk-input" type="email" name="mail" placeholder="Votre adresse email" required>
                            </div>
                        </div>

                        <div class="uk-form-group">
                            <label class="uk-form-label" id="mdp">Mot de passe</label>
                            <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                   <i class="mdpicon"></i>
                                </span>
                                <input class="uk-input" type="password" name="mdp" placeholder="********" required>
                            </div>
                        </div>

                        <div class="uk-form-group">
                            <div class="uk-position-relative w-101">
                                <label><input class="uk-checkbox" type="checkbox" name="newsletter"> Recevoir la newsletter (occasionnelle) du site</label><br>
                                <label><input class="uk-checkbox" type="checkbox" name="cgu" required> J'accepte les <a target="_blank" href="/mentions-legales-cgu/"></a>Conditions Générales d'Utilisation</a></label>
                            </div>
                        </div>

                        <div class="uk-form-group" id="reCaptchaV2"></div>

                        <div class="end" >
                            <div class="group_end">
                                <p><a href="page_connexion.php">Déjà un compte ?</a></p>
                                <button type="submit" name="forminscription"class="btn btn-primary">Je m'inscris</button>
                            </div>
                            <div class="group_end2"> 
                                <button class="btn btn-primary ajax-loader" style="display: none;" type="button" disabled>
                                            Je m'inscris
                                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>
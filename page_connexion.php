<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>connexion</title>
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Russo+One&display=swap');
    </style>
  <link rel="stylesheet" href="sitenum/page_connexion.css"/> 
  <link rel="icon" type="image/png" sizes="16x16" href="sitenum/images/icon.png">

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
                        <li class="links"><a href="index.html">Acceuil</a></li>
                        <li class="links"><a href="page_inscription.php">Inscription</a></li>
                        <li class="links"><a href="page_connexion.php">Connexion</a></li>
                        <li class="links"><a href="goupil/php/home.php">Arcayk</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>



    <div class="page_content">
        <div class="page_content_inner"> 

            <div class="carré_connexion"> 
                <div class="inner"> 
                    <h2 class="title">Connexion</h2>
                    <p class="sous_title">Accédez a toutes les fonctionnalités du site.</p>
                </div>
                <form action="" method="POST" class="connexion">
                <input type="hidden" name="token" value="8ad90566d885769e62556852238c5bd9d0ce09040843a46c33ac8fce4f1870a5">
                <div class="content"> 
                    <div class="group_formulaire">
                        <label class="group_label" id="pseudo">Pseudo</label>
                        <div class="champs"> 
                            <span class="icons"> 
                                <i class="pseudoicon"></i>
                            </span>
                            <input type="text" class="input" name="pseudo" placeholder="Votre pseudo" autofocus required >
                        </div>
                    </div>
                    <div class="group_formulaire">
                        <label class="group_label" id="mail">Email</label>
                        <div class="champs"> 
                            <span class="icons"> 
                                <i class="mailicon"></i>
                            </span>
                            <input type="text" class="input" name="email" placeholder="Votre email" autofocus required >
                        </div>
                    </div>
                    <div class="group_formulaire"> 
                        <label class="group_label" id="mdp">Mot de passe <a href="" class="oublie">Mot de passe oublié ?</a></label>
                        <div class="champs"> 
                            <span class="icons"> 
                            <i class="mdpicon"></i>
                            </span>
                        <input type="text" class="input" name="mdp" placeholder="***********" autofocus required >
                        </div>
                    </div>
                    <div class="group_formulaire"> 
                        <label class="remember_me"><input class="checkbox" type="checkbox" name="remember_me" checked>Se souvenir de moi</label>
                    </div>
                    <div class="end"> 
                        <div class="group_end">
                            <p><a href="page_inscription.php">Pas encore de compte?</a></p>
                        </div>
                        <div class="group_end2"> 
                            <button type="submit" class="first_button">Connexion</button>
                            <button type="button" class="first_button_ajax_loader" style="display: none;" disabled>Connexion
                            <span class="spinner" role="status" aria-hidden="true"></span>
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
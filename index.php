<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Chantier du numérique</title>
    <link rel="stylesheet" href="sitenum/main.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="sitenum/images/icon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Russo+One&display=swap');
    </style>

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

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h1>Chantier du numérique</h1>
            <p>Bonjour et bienvenue sur notre site web! <br /> Nous allons maintenant vous montrer comment démonter et remonter un PC afin de le reconditionné a neuf et ainsi le remettre en parfait état de marche<br /> Les PC subieront un clonage de disque
                dur afin de les mettres sous linux mint avec un bagage de logiciels et d'applications utiles a l'utilisation quotidienne d'un PC.<br /> Nous allons maintenant vous détaillez ci-dessous le protocole a suivre par étapes.</p>
        </div>
    </section>


    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Reconditionnement d'un PC</h2>
                <p>Voici le protocole a suivre par étapes.</p>
            </header>
            <div class="highlights">
                <section>
                    <div class="content">
                        <header>
                            <h3>Déchargement des composants et désynfection du PC</h3>
                        </header>
                        <p>On appuie 10 seconde sur le bouton principale avant toute action sur la tour afin de décharger les composants en électricité plus désynfection total du PC a l'aide de produits.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <h3>Démontage des caches</h3>
                        </header>
                        <p>Dévissage des 2 vis a l'arrière de la tour (possibilité de les dévisser a la main). On peux maintenant déclipser le cache du haut par l'arrière, il se soulève ensuite celui de la face avant en faisant attention avec les clipses
                            car ceux-ci coulissent.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <h3>Démontage des composants</h3>
                        </header>
                        <p>On soulève le bloc disque en le faisant clipser sur le coté. On check ensuite tout les composants afin de voir que tout es en bon état. On enlève le cache du ventilateur au dessus du radiateur et du processeur. Ensuite nous allons
                            dévisser le Disque dur afin de pouvoir le cloner avec un logiciel appelé "CloneZilla" (nous vous détaillerons sa dans une prochaine étape plus bas).</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <h3>Nettoyage des composant et de l'interieur</h3>
                        </header>
                        <p>Une fois la tour bien visible, on fait un nettoyage générale de tout les composant et surtout les ventilateurs ou on trouve souvent beaucoup de poussière. On peux même utiliser une souflette, c'est encore mieux! On oublie pas de
                            tester la pile, en dessous de 3.0V il faudra la changer!</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <h3>Remontage des composants</h3>
                        </header>
                        <p>Ensuite après avoir tout bien nettoyer nous pouvons remonter le cache ventirad et le disque dur cloné avec linux mint. On redescend le bloc disque dur en le clipsant sur le coté et en faisant bien attention qu'aucun cable ne se
                            coinçe sous celui ci.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <header>
                            <h3>Remontage des caches</h3>
                        </header>
                        <p>On peux mainteant refermer les 2 cache boitier démonter précédement. Et enfin on peux passer au test finale afin de vérifié que tout fonctionne parfaitement, on branche le pc, on l'allume, on test aussi le lecteur optique on ne
                            sait jamais! Pour finir on oublie pas de repasser un petit coup de désynfectant au cas où!</p>
                    </div>
                </section>
            </div>
        </div>
    </section>


    <!-- Banner -->
    <section id="cta" class="wrapper">
        <div class="inner">
            <h1>Clonage d'un disque avec le logiciel "CloneZilla"</h1>
            <p>Nous allons maintenant vous montrez les étapes a suivre pour cloner un disque dur a partir d'un disque maître, celui-ci contient tout d'abord Linux mint, mais aussi un bagage de logiciel et d'application. Ce procéder nous permet ainsi de récupérer
                tout ce qu'il contient sans avoir a tout installer sur chacun des disques a cloner. On le fait sous Linux mais il y aurait très bien pu avoir Windows avec d'autre logiciels et application sur le disque maître, vous pouvez mettre ce que
                vous voulez a cloner a vous après de décidez!
                <strong>ATTENTION!!</strong> au câblage des disques durs, BLEU master, GRIS disque vierge. Si erreur vous cassez le disque maître! Il vous faudra simplement une clé USB qui contient le logiciel "CloneZilla".</p>
        </div>
    </section>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Clonage d'un disque</h2>
                <p>Voici le protocole a suivre par étapes.</p>
            </header>
            <div class="highlights">
                <section>
                    <div class="content">
                        <p>On allume le PC et on le fait booter sur la clé USB avec "Clonezilla".</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <p>On rentre ensuite dans le logiciel "CloneZilla", on sélectionne la langue Française.On laisse "keep" et on start CloneZilla.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <p>On sélectionne "device-device" pour cloner de disque à disque.Séléctionner le mode expert afin de choisir nos propres options de clonage.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <p>On passe ensuite au clonage on clique sur clonage disque locale vers disque locale. Le logiciel va nous demandez a partir de quel disque nous voulons cloner, on sélectionne donc le disque maître. Puis on sélectionne le disque vierge,
                            normalement il ne reste plus que celui la.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <p>Une fois cela fait on appuie une première fois sur entré et on clique sur ne pas vérifier.Ensuite on sélectionne "k1" ainsi que power off, qui arrêtera le logiciel automatiquement une fois le clonage terminé.</p>
                    </div>
                </section>
                <section>
                    <div class="content">
                        <p>Dernière étape le logiciel va nous poser 3 questions auquels nous allons répondre oui pour cela on clique sur entré puis y puis entré et l'on répete cela 3x.Le clonage es maintenant lançé, cela va prendre plusieurs minutes et le
                            disque vierge contiendra exactement la même chose que le disque maître!</p>
                    </div>
                </section>
            </div>

        </div>
    </section>
    <a href="page_inscription.php">inscription</a>

</body>

</html>
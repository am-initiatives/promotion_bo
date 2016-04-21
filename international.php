<?php $page="etudes";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="etudes" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_etudes">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-3">
                        <a href="cursus.php">Contexte</a>
                    </li>
                    <li class="col-md-2 ">
                        <a href="cursus.php#section_cursus">Cursus</a>
                    </li>
                    <li class="col-md-2">
                        <a href="#section_international" class="active">International</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_partir" class="bg_beige">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Partir à l'étranger</h2>
            <div class="col-md-12">
                <p class="text-muted text-justify">Comme toutes les écoles d’ingénieur françaises, les Arts et Métiers t’offrent la possibilité de partir à l’étranger. Un séjour de 8 semaines à l’étranger est obligatoire pour valider ton cursus.</p>
                <p class="text-muted text-justify">Tu pourras réaliser une partie de tes études à l’international. De nombreux partenariats existent, un peu partout dans le monde. Mais attention, les places sont chères, il te faudra de bons résultats pour prétendre à l’un de ces parcours. Différents types de mobilité existent, allant du séjour bi-diplômant (de 2 à 4 semestres) au semestre d’échange.</p>
            </div>
        </div>
    </section>

    <section id="section_cursus-etranger">
        <div class="container">
            <h2 class="text-uppercase text-center text-muted">Différents types de cursus</h2>
            <p class="text-center text-muted"><i>(Cliquer sur les cercles pour plus d'informations)</i></p><br>
            <div class="row text-uppercase text-center">
                <a href="#" onclick="document.getElementById('cercleDD').style.display = 'block'; this.style.display = 'none';"><img src="img/international/cercle-dd.jpg" class="col-md-3"></a>
                <img src="img/international/cercle-dd-2.jpg" id="cercleDD" class=" col-md-3 cercle-cache">
                <img src="img/international/cercle-dd.jpg" class="col-md-3 cercle-dd">
                <img src="img/international/cercle-dd.jpg" class="col-md-3 cercle-dd">
                <img src="img/international/cercle-dd.jpg" class="col-md-3 cercle-dd">
            </div>
        </div>
    </section>

    <section id="section_informations-cursus" class="bg_beige">
        <div class="container">
            <div class="row text-muted">
                <h3>Pour plus d'informations sur les cursus proposés...</h3><br>
            </div>
            <div class="row text-center">
                <div class="col-md-6">
                    <i class="fa fa-3x fa-sitemap" aria-hidden="true"></i>
                    <h4 class="text-couleur">Base de données des différents cursus<br>
                        <i>Projet métier effectué par des élèves</i></h4>
                </div>
                <div class="col-md-6">
                    <i class="fa fa-3x fa-chain" aria-hidden="true"></i>
                    <h4 class="text-couleur">Liste des établissements étrangers partenaires<br>
                        <i>Site web de l'ENSAM</i></h4>
                </div>
            </div>
        </div>
    </section>

    <section id="section_mobilite">
        <div class="container">
            <div class="row text-center">
                <i class="fa fa-5x fa-exclamation-triangle" aria-hidden="true"></i>
            </div>
            <div class="row text-muted">
                <p class="text-center">Si tu ne pars pas pour un cursus à l’étranger, tu devras quand même changer de campus au cours de ton cursus. <br>
                    <b>Et non, impossible de rester 3 ans à Bordeaux !</b></p>
                <p class="text-justify col-md-8 col-md-offset-2">Des échanges peuvent avoir lieu avec d’autres écoles françaises, comme l’IAE (Aix-en-Provence, Paris), l’ESTP, l’ENAC, Supelec… Tu pourras également réaliser ton expertise de 3ème année dans un campus Arts et Métiers, différent de celui où tu auras réalisé tes deux premières années.</p>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

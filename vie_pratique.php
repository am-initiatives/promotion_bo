<?php $page="campus";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="campus" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_campus">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-4 col-sm-6">
                        <a href="campus.php">Campus</a>
                    </li>
                    <li class="col-md-2 col-sm-6">
                        <a href="#campus" class="active">Vie Pratique</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_campus_services" class="bg_beige">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Services de proximité</h2>
            <div class="row">
                <div class="col-md-1 cadre_logo"><img src="img/vie_pratique/poste.jpg" class="img-circle" data-toggle="collapse" href="#collapsePoste"/></div>
                <div class="col-md-1 cadre_logo"><img src="img/vie_pratique/mairie.jpg" class="img-circle" data-toggle="collapse" href="#collapseMairie"/></div>
                <div class="col-md-1 cadre_logo"><img src="img/vie_pratique/banque.jpg" class="img-circle" data-toggle="collapse" href="#collapseBanque"/></div>
                <div class="col-md-1 cadre_logo"><img src="img/vie_pratique/police.jpg" class="img-circle" data-toggle="collapse" href="#collapsePolice"/></div>
                <div class="col-md-1 cadre_logo"><img src="img/vie_pratique/laverie.jpg" class="img-circle" data-toggle="collapse" href="#collapseLaverie"/></div>
            </div>
            <div class="row">
                <div class="collapse col-md-6" id="collapsePoste">
                    <div class="well">
                        <h3 class="text-couleur">La Poste</h3>
                        <p>Arret xxx, ligne x<br></p>
                            362 Cours Gambetta, 33400 Talence
                    </div>
                </div>
                <div class="collapse col-md-6" id="collapseMairie">
                    <div class="well">
                        <h3 class="text-couleur">Mairie</h3>
                        <p>Arret xxx, ligne x<br></p>
                        362 Cours Gambetta, 33400 Talence
                    </div>
                </div>
                <div class="collapse col-md-6" id="collapseBanque">
                    <div class="well">
                        <h3 class="text-couleur">Banque</h3>
                        <p>Arret xxx, ligne x<br></p>
                        362 Cours Gambetta, 33400 Talence
                    </div>
                </div>
                <div class="collapse col-md-6" id="collapsePolice">
                    <div class="well">
                        <h3 class="text-couleur">Police</h3>
                        <p>Arret xxx, ligne x<br></p>
                        362 Cours Gambetta, 33400 Talence
                    </div>
                </div>
                <div class="collapse col-md-6" id="collapseLaverie">
                    <div class="well">
                        <h3 class="text-couleur">Laverie</h3>
                        <p>Arret xxx, ligne x<br></p>
                        362 Cours Gambetta, 33400 Talence
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_transports" class="text-right">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Transports</h2>
        </div>
    </section>

    <section id="section_sante" class="bg_beige">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Santé</h2>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

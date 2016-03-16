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
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1"><img src="img/vie_pratique/poste.png" class="img-circle" data-toggle="collapse" href="#collapsePoste" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/mairie.png" class="img-circle" data-toggle="collapse" href="#collapseMairie"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/banque.png" class="img-circle" data-toggle="collapse" href="#collapseBanque"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/police.png" class="img-circle" data-toggle="collapse" href="#collapsePolice"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/laverie.png" class="img-circle" data-toggle="collapse" href="#collapseLaverie"/></div>
                </div>
                <div class="row">
                    <div class="collapse in well" id="collapsePoste">
                        <h3 class="text-couleur">La Poste</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseMairie">
                        <h3 class="text-couleur">Mairie</h3>
                        <p>Arret xxx, ligne x<br>
                        362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseBanque">
                        <h3 class="text-couleur">Banque</h3>
                        <p>Arret xxx, ligne x<br>
                        362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapsePolice">
                        <h3 class="text-couleur">Police</h3>
                        <p>Arret xxx, ligne x<br>
                        362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseLaverie">
                        <h3 class="text-couleur">Laverie</h3>
                        <p>Arret xxx, ligne x<br>
                        362 Cours Gambetta, 33400 Talence</p>
                    </div>
                </div>
            </div>
            <img src="img/vie_pratique/illustrations/services.jpg" class="col-md-6 img-responsive center-block">
        </div>
    </section>

    <section id="section_campus_transports" class="text-right">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Transports</h2>
            <img src="img/vie_pratique/illustrations/transports.jpg" class="col-md-6 img-responsive center-block">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1"><img src="img/vie_pratique/velo.png" class="img-circle" data-toggle="collapse" href="#collapseVelo"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/tram.png" class="img-circle" data-toggle="collapse" href="#collapseTram" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/bus.png" class="img-circle" data-toggle="collapse" href="#collapseBus" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/train.png" class="img-circle" data-toggle="collapse" href="#collapseTrain"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/avion.png" class="img-circle" data-toggle="collapse" href="#collapseAvion"/></div>
                </div>
                <div class="row">
                    <div class="collapse well" id="collapseVelo">
                        <h3 class="text-couleur">La Poste</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse in well" id="collapseTram">
                        <h3 class="text-couleur">Tramway</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse in well" id="collapseBus">
                        <h3 class="text-couleur">Bus</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseTrain">
                        <h3 class="text-couleur">Police</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseAvion">
                        <h3 class="text-couleur">Laverie</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_campus_sante" class="bg_beige">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Santé</h2>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-2"><img src="img/vie_pratique/poste.png" class="img-circle" data-toggle="collapse" href="#collapsePoste" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/mairie.png" class="img-circle" data-toggle="collapse" href="#collapseMairie"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/banque.png" class="img-circle" data-toggle="collapse" href="#collapseBanque"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/police.png" class="img-circle" data-toggle="collapse" href="#collapsePolice"/></div>
                </div>
                <div class="row">
                    <div class="collapse in well" id="collapsePoste">
                        <h3 class="text-couleur">La Poste</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseMairie">
                        <h3 class="text-couleur">Mairie</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseBanque">
                        <h3 class="text-couleur">Banque</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapsePolice">
                        <h3 class="text-couleur">Police</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                </div>
            </div>
            <img src="img/vie_pratique/illustrations/services.jpg" class="col-md-6 img-responsive center-block">
        </div>
    </section>

    <section id="section_campus_restauration" class="text-right">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Restauration</h2>
            <img src="img/vie_pratique/illustrations/restauration.jpg" class="col-md-6 img-responsive center-block">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-1"><img src="img/vie_pratique/velo.png" class="img-circle" data-toggle="collapse" href="#collapseVelo"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/tram.png" class="img-circle" data-toggle="collapse" href="#collapseTram" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/bus.png" class="img-circle" data-toggle="collapse" href="#collapseBus" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/train.png" class="img-circle" data-toggle="collapse" href="#collapseTrain"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/avion.png" class="img-circle" data-toggle="collapse" href="#collapseAvion"/></div>
                </div>
                <div class="row">
                    <div class="collapse well" id="collapseVelo">
                        <h3 class="text-couleur">La Poste</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse in well" id="collapseTram">
                        <h3 class="text-couleur">Tramway</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse in well" id="collapseBus">
                        <h3 class="text-couleur">Bus</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseTrain">
                        <h3 class="text-couleur">Police</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseAvion">
                        <h3 class="text-couleur">Laverie</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_campus_commerces" class="bg_beige">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Commerces</h2>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-2"><img src="img/vie_pratique/poste.png" class="img-circle" data-toggle="collapse" href="#collapsePoste" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/mairie.png" class="img-circle" data-toggle="collapse" href="#collapseMairie"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/banque.png" class="img-circle" data-toggle="collapse" href="#collapseBanque"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/police.png" class="img-circle" data-toggle="collapse" href="#collapsePolice"/></div>
                </div>
                <div class="row">
                    <div class="collapse in well" id="collapsePoste">
                        <h3 class="text-couleur">La Poste</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseMairie">
                        <h3 class="text-couleur">Mairie</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapseBanque">
                        <h3 class="text-couleur">Banque</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse well" id="collapsePolice">
                        <h3 class="text-couleur">Police</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                </div>
            </div>
            <img src="img/vie_pratique/illustrations/commerces.jpg" class="col-md-6 img-responsive center-block">
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

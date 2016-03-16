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
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/poste.png" class="img-circle" data-toggle="collapse" href="#collapsePoste" aria-expanded="true"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/mairie.png" class="img-circle" data-toggle="collapse" href="#collapseMairie"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/banque.png" class="img-circle" data-toggle="collapse" href="#collapseBanque"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/police.png" class="img-circle" data-toggle="collapse" href="#collapsePolice"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/laverie.png" class="img-circle" data-toggle="collapse" href="#collapseLaverie"/></div>
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
            <img src="img/vie_pratique/illustrations/services.jpg" class="col-md-6">
        </div>
    </section>

    <section id="section_campus_transports" class="text-right">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Transports</h2>
            <img src="img/vie_pratique/illustrations/services.jpg" class="col-md-6">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/poste.png" class="img-circle" data-toggle="collapse" href="#collapsePoste" aria-expanded="true"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/mairie.png" class="img-circle" data-toggle="collapse" href="#collapseMairie"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/banque.png" class="img-circle" data-toggle="collapse" href="#collapseBanque"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/police.png" class="img-circle" data-toggle="collapse" href="#collapsePolice"/></div>
                    <div class="col-xs-2 cadre_logo"><img src="img/vie_pratique/laverie.png" class="img-circle" data-toggle="collapse" href="#collapseLaverie"/></div>
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
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><img src="img/vie_pratique/poste.jpg" class="img-circle"/></a>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">
                            <h3 class="text-couleur">Laverie</h3>
                            <p>Arret xxx, ligne x<br>
                                362 Cours Gambetta, 33400 Talence</p>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
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

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
                    <div class="col-xs-2 col-xs-offset-1 col-md-offset-0"><img src="img/vie_pratique/poste.png" class="img-circle" data-toggle="collapse" href="#collapsePoste" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/mairie.png" class="img-circle" data-toggle="collapse" href="#collapseMairie"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/banque.png" class="img-circle" data-toggle="collapse" href="#collapseBanque"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/police.png" class="img-circle" data-toggle="collapse" href="#collapsePolice"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/laverie.png" class="img-circle" data-toggle="collapse" href="#collapseLaverie"/></div>
                </div>
                <div class="row">
                    <div class="collapse in" id="collapsePoste">
                        <h3 class="text-couleur">La Poste</h3>
                        <p>Arret Forum (Tram B)<br>
                            262 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseMairie">
                        <h3 class="text-couleur">Mairie</h3>
                        <p>Rue du Professeur Arnozan, 33400 Talence<br>
                            05 56 84 78 33</p>
                    </div>
                    <div class="collapse" id="collapseBanque">
                        <h3 class="text-couleur">Banque</h3>
                        <p><span class="text-bold">BNP Paribas</span><br>
                            Arrêt Forum (Tram Ligne B)<br>
                            14 allée du 7ème Art, 33400 Talence<br>
                            08 20 82 00 01</p>
                        <p><span class="text-bold">LCL</span><br>
                            571 Cours de la libération, 33400 Talence<br>
                            05 57 35 01 32</p>
                    </div>
                    <div class="collapse" id="collapsePolice">
                        <h3 class="text-couleur">Commissariat de Police</h3>
                        <p>35 Rue des Charmilles, 33400 Talence<br>
                            05 57 35 77 22</p>
                    </div>
                    <div class="collapse" id="collapseLaverie">
                        <h3 class="text-couleur">Laverie</h3>
                        <p><span class="text-bold">Arts et Métiers</span><br>
                            (Sous conditions)</p>
                        <p><span class="text-bold">Résidence Amal</span><br>
                            Rue Ronsard, 33400 Talence</p>
                        <p><span class="text-bold">Crous Village 1</span><br>
                            16 Avenue de Collegno, 33400 Talence</p>
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
                    <div class="col-xs-2 col-xs-offset-1 col-md-offset-2"><img src="img/vie_pratique/velo.png" class="img-circle" data-toggle="collapse" href="#collapseVelo"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/tram.png" class="img-circle" data-toggle="collapse" href="#collapseTram" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/bus.png" class="img-circle" data-toggle="collapse" href="#collapseBus" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/train.png" class="img-circle" data-toggle="collapse" href="#collapseTrain"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/avion.png" class="img-circle" data-toggle="collapse" href="#collapseAvion"/></div>
                </div>
                <div class="row">
                    <div class="collapse" id="collapseVelo">
                        <h3 class="text-couleur">Vélo</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse in" id="collapseTram">
                        <h3 class="text-couleur">Tramway</h3>
                        <p>Arrêt le plus proche : Arts et Métiers - Ligne B : 20min pour rejoindre le centre-ville</p>
                        <p>Si vous n’avez pas de trajet quotidien en tram, nous vous déconseillons de prendre la carte annuellemais simplement la carte étudiant TBC (au relais TBC en face de la BU) vous permettant de profiter d’un tarif réduit sur tout le réseau TBC. Les tram et bus circulent jusqu’à 1h15 du matin du jeudi au samedi et à minuit les autres jours.</p>
                    </div>
                    <div class="collapse in" id="collapseBus">
                        <h3 class="text-couleur">Bus</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseTrain">
                        <h3 class="text-couleur">Train</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseAvion">
                        <h3 class="text-couleur">Avion</h3>
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
                    <div class="col-xs-2 col-xs-offset-1 col-md-offset-0"><img src="img/vie_pratique/medecin.png" class="img-circle" data-toggle="collapse" href="#collapseMedecin" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/pharmacie.png" class="img-circle" data-toggle="collapse" href="#collapsePharmacie"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/hopital.png" class="img-circle" data-toggle="collapse" href="#collapseHopital"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/secu.png" class="img-circle" data-toggle="collapse" href="#collapseSecu"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/assistance.png" class="img-circle" data-toggle="collapse" href="#collapseAssistance"/></div>
                </div>
                <div class="row">
                    <div class="collapse in" id="collapseMedecin">
                        <h3 class="text-couleur">Médecine préventive</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapsePharmacie">
                        <h3 class="text-couleur">Pharmacie</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseHopital">
                        <h3 class="text-couleur">Hopital</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseSecu">
                        <h3 class="text-couleur">Sécurité Sociale</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseAssistance">
                        <h3 class="text-couleur">Assistance Sociale</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                </div>
            </div>
            <img src="img/vie_pratique/illustrations/sante.jpg" class="col-md-6 img-responsive center-block">
        </div>
    </section>

    <section id="section_campus_restauration" class="text-right">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Restauration</h2>
            <img src="img/vie_pratique/illustrations/shopping.jpg" class="col-md-6 img-responsive center-block">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-2 col-xs-offset-2 col-md-offset-4"><img src="img/vie_pratique/restaurant.png" class="img-circle" data-toggle="collapse" href="#collapseRestaurant" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/fastfood.png" class="img-circle" data-toggle="collapse" href="#collapseFastfood"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/livraison.png" class="img-circle" data-toggle="collapse" href="#collapseLivraison"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/boulangerie.png" class="img-circle" data-toggle="collapse" href="#collapseBoulangerie"/></div>
                </div>
                <div class="row">
                    <div class="collapse in" id="collapseRestaurant">
                        <h3 class="text-couleur">Restaurants</h3>
                        <p><span class="text-bold">Le Bistrot Régent</span><br>
                            Arrêt Forum (tram B)<br>
                            Brasserie, menu à 12,90€</p>
                        <p><span class="text-bold">Yamato</span><br>
                            Arrêt Forum (Tram B)<br>
                            Pour les amateurs de sushis, menu à partir de 15€</p>
                        <p><span class="text-bold">Ed Wood Burger</span><br>
                            Arret Forum (Tram B)<br>
                            Burger rétro 50’s</p>
                    </div>
                    <div class="collapse" id="collapseFastfood">
                        <h3 class="text-couleur">Restauration Rapide</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseLivraison">
                        <h3 class="text-couleur">Livraison</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseBoulangerie">
                        <h3 class="text-couleur">Boulangerie</h3>
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
                    <div class="col-xs-2 col-xs-offset-4 col-md-offset-0"><img src="img/vie_pratique/supermarches.png" class="img-circle" data-toggle="collapse" href="#collapseSupermarches" aria-expanded="true"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/shopping.png" class="img-circle" data-toggle="collapse" href="#collapseShopping"/></div>
                </div>
                <div class="row">
                    <div class="collapse in" id="collapseSupermarches">
                        <h3 class="text-couleur">Supermarchés</h3>
                        <p><span class="text-bold">Casino</span><br>
                            Arrêt Peixotto (Tram B)<br>
                            Lundi au samedi : 8h30-20h30<br>
                            Dimanche : 9h-12h</p>
                        <p><span class="text-bold">Simply Market</span><br>
                            Arrêt Roustaing (Tram B)<br>
                            Lundi au samedi : 8h30-20h30<br>
                            Dimanche : 9h-12h30</p>
                        <p><span class="text-bold">Leclerc</span><br>
                            19 rue Pacaris 33400 Talence<br>
                            Lundi au samedi : 9h-20h</p>
                        <p><span class="text-bold">Leclerc Drive</span><br>
                            Sortie 17 de la rocade</p>
                        <p><span class="text-bold">Intermarché</span><br>
                            6 avenue Favard 33170 Gradignan<br>
                            Lundi au samedi : 9h-20h<br>
                            Dimanche : 9h-12h45</p>

                    </div>
                    <div class="collapse" id="collapseShopping">
                        <h3 class="text-couleur">Shopping</h3>
                        <p>Arret xxx, ligne x<br>
                            362 Cours Gambetta, 33400 Talence</p>
                    </div>
                </div>
            </div>
            <img src="img/vie_pratique/illustrations/shopping.jpg" class="col-md-6 img-responsive center-block">
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

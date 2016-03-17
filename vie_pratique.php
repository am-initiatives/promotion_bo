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
                    <div class="col-xs-2"><img src="img/vie_pratique/bus.png" class="img-circle" data-toggle="collapse" href="#collapseBus"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/train.png" class="img-circle" data-toggle="collapse" href="#collapseTrain"/></div>
                    <div class="col-xs-2"><img src="img/vie_pratique/avion.png" class="img-circle" data-toggle="collapse" href="#collapseAvion"/></div>
                </div>
                <div class="row">
                    <div class="collapse" id="collapseVelo">
                        <h3 class="text-couleur">Vélo</h3>
                        <p>Plus rapide que le tramway en ville.<p>
                        <p><span class="text-bold">VCUB</span><br>
                            (Vélo de la Communauté Urbaine de Bordeaux)<br>
                            Gratuit les 30 premières minutes.</p>
                    </div>
                    <div class="collapse in" id="collapseTram">
                        <h3 class="text-couleur">Tramway</h3>
                        <p>Arrêt Arts et Métiers à 400m – Ligne B (20 min du centre ville).<br>
                            Jusqu’à 00h du dimanche au mercredi, 1h15 du jeudi au samedi.</p>
                    </div>
                    <div class="collapse" id="collapseBus">
                        <h3 class="text-couleur">Bus</h3>
                        <p>Arrêt Arts et Métiers - Ligne ?<br>
                            Ligne nocturne (58) entre 1h30 et 5h30 du jeudi au samedi, (Paludate-Victoire-Campus) dépose devant l’Ecole.</p>
                    </div>
                    <div class="collapse" id="collapseTrain">
                        <h3 class="text-couleur">Train</h3>
                        <p>Gare Saint-Jean – Trains quotidiens vers Toulouse, Marseille et Paris.<br>
                            Desservie par les lignes de bus 10, 9 et 16 (25min, lignes directes)<br>
                            Desservie par le tram C (45min en changeant à Quinconces).</p>
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
                        <p>Lundi au Jeudi : 9h-19h<br>
                            Vendredi : 9h-17h<br>
                            Consultations médicales sur RDV (aucun frais à avancer) : générale, gynécologie, tabacologie, dermatologie, etc<br>
                            Certificats médicaux<br>
                            En face de l’arrêt de Doyen Brus (Tram B)</p>
                    </div>
                    <div class="collapse" id="collapsePharmacie">
                        <h3 class="text-couleur">Pharmacie</h3>
                        <p><span class="text-bold">Pharmacie J&M Teulé</span><br>
                            485 cours de la Libération, 33400 Talence</p>
                    </div>
                    <div class="collapse" id="collapseHopital">
                        <h3 class="text-couleur">Hopital</h3>
                        <p><span class="text-bold">Hôpital Pellegrin</span><br>
                            (10 minutes en voiture)<br>
                            Pl Amélie Raba Léon, 33076 Bordeaux Cedex</p>
                    </div>
                    <div class="collapse" id="collapseSecu">
                        <h3 class="text-couleur">Sécurité Sociale</h3>
                        <p><span class="text-bold">Vittavi</span><br>
                            Arrêt Victoire (Tram B)<br>
                            21 place de la Victoire, 33000 Bordeaux<br>
                            05 57 95 07 01</p>
                        <p><span class="text-bold">LMDE</span><br>
                            Arrêt St Nicolas (Tram B)<br>
                            24 cours Argonne, 33000 Bordeaux<br>
                            09 69 36 96 01</p>
                    </div>
                    <div class="collapse" id="collapseAssistance">
                        <h3 class="text-couleur">Assistance Sociale</h3>
                        <p>Lundi, Jeudi: 9h30-12h & 13h30-16h<br>
                            Bâtiment A 22 Rez de Chaussée<br>
                            351 Av. de la libération, 33405 Talence</p>
                    </div>
                </div>
            </div>
            <img src="img/vie_pratique/illustrations/sante.jpg" class="col-md-6 img-responsive center-block">
        </div>
    </section>

    <section id="section_campus_restauration" class="text-right">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Restauration</h2>
            <img src="img/vie_pratique/illustrations/restaurant.jpg" class="col-md-6 img-responsive center-block">
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
                        <p><span class="text-bold">Restaurant Universitaire</span><br>
                            Midi et soir en semaine, 3€25, grande variété de plats</p>
                        <p><span class="text-bold">McDonald’s</span><br>
                            Rond Point de l’Université, 33400 Talence</p>
                        <p><span class="text-bold">Subway</span><br>
                            Rond Point de l’Université, 33400 Talence</p>
                        <p><span class="text-bold">HFC</span><br>
                            Cours de la Libération, 33400 Talence</p>
                        <p><span class="text-bold">BBS : Burger Bagels & Samosa</span><br>
                            Entre Kedge et le CREPS, cours de la Libération. (midi et soir)</p>
                    </div>
                    <div class="collapse" id="collapseLivraison">
                        <h3 class="text-couleur">Livraison</h3>
                        <p><span class="text-bold">Domino’s Pizza</span><br>
                            61 av Jean Jaures, 33600 Pessac - Ouvert 7j/7
                            05 56 95 09 00</p>
                        <p><span class="text-bold">Sushi Shop</span><br>
                            0 826 826 826</p>
                    </div>
                    <div class="collapse" id="collapseBoulangerie">
                        <h3 class="text-couleur">Boulangerie</h3>
                        <p><span class="text-bold">Cafetéria Arts et Métiers</span><br>
                            Hall d'honneur</p>
                        <p><span class="text-bold">Le fournil de Compostelle</span><br>
                            755 Cours de la Libération, 33600 Pessac</p>
                        <p><span class="text-bold">Le 48</span><br>
                            13 Avenue Roul, 33400 Talence</p>
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
                        <p>Rue Sainte Catherine<br>
                            Arrêt Hotel de ville (Tram B)</p>
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

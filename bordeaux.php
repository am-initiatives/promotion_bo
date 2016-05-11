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
                    <li class="col-md-2 col-md-offset-3">
                        <a href="campus.php">Campus</a>
                    </li>
                    <li class="col-md-2">
                        <a href="vie_pratique.php">Vie Pratique</a>
                    </li>
                    <li class="col-md-2">
                        <a href="bordeaux.php" class="active">Bordeaux</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_semaine" class="bg_beige hidden-xs">
        <div class="container">
            <div class="col-sm-12">
                <div class="row text-center text-couleur">
                    <h3>Notre petit tour de Bordeaux en une semaine...</h3><br>
                </div>
                <div class="row text-center text-uppercase">
                    <a href="#lundi" class="text-couleur page-scroll"><h3 class="col-sm-2">Lundi</h3></a>
                    <a href="#mercredi" class="text-couleur page-scroll"><h3 class="col-sm-2 col-sm-offset-2">Mercredi</h3></a>
                    <a href="#vendredi" class="text-couleur page-scroll"><h3 class="col-sm-2 col-sm-offset-2">Vendredi</h3></a>
                </div>
                <div class="row ligne bg_orange">
                    <div class="col-sm-2"><div class="point center-block"></div></div>
                    <div class="col-sm-2"><div class="point center-block"></div></div>
                    <div class="col-sm-2"><div class="point center-block"></div></div>
                    <div class="col-sm-2"><div class="point center-block"></div></div>
                    <div class="col-sm-2"><div class="point center-block"></div></div>
                    <div class="col-sm-2"><div class="point center-block"></div></div>
                </div>
                <div class="row text-center text-uppercase">
                    <a href="#mardi" class="text-couleur page-scroll"><h3 class="col-sm-2 col-sm-offset-2">Mardi</h3></a>
                    <a href="#jeudi" class="text-couleur page-scroll"><h3 class="col-sm-2 col-sm-offset-2">Jeudi</h3></a>
                    <a href="#we" class="text-couleur page-scroll"><h3 class="col-sm-2 col-sm-offset-2">Week-end</h3></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section_jours" class="bg_orange text-muted">
        <div class="container">
            <div id="lundi" class="row bg_blanc text-muted text-justify">
                <div class="bg_beige col-md-7 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-xs-12 visible-xs visible-sm">Lundi</h2>
                    <img src="img/bordeaux/shopping.jpg" class="col-md-10 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-md-2 hidden-xs hidden-sm">L<br>u<br>n<br>d<br>i</h2>
                </div>
                <div class="col-md-5 col-xs-12">
                    <h3 class="text-center">???</h3>
                    <p class="text-justify">Une après-midi ensoleillée et des envies de shopping ? File en centre-ville, et balade-toi sur la rue commerçante la plus longue d’Europe, la rue Ste Catherine. Dans les ruelles alentours, tu trouveras des boutiques de créateurs et de designer, des concepts stores et de nombreux cafés. Un centre-ville parfait pour flâner.</p>
                </div>
            </div>
            <div id="mardi" class="row bg_blanc text-muted text-justify">
                <h2 class="text-couleur text-center text-uppercase bg_beige col-xs-12 visible-xs visible-sm">Mardi</h2>
                <div class="col-md-5 col-xs-12">
                    <h3 class="text-center">???</h3>
                    <p class="text-justify">Si la culture t’a manqué en prépa, et que tu souhaites rattraper ton retard, Bordeaux est une ville pour toi, qui n’a pas à rougir face aux métropoles européennes. Elle compte une quinzaine de salle de concerts et de théâtre de tous horizons : du classique au rock en passant par l’électro, de l’opéra aux comédies de café-théâtre, il y en a pour tous les gouts.  De nombreux lieux d’exposition et une dizaine de musées confirment la dominante culturelle de la ville. Bordeaux possède aussi de très beaux monuments et un ensemble architectural inscrit au patrimoine mondial de l’UNESCO, hérité de la période des Lumières. Alors que tu sois accro à la musique ou que tu aimes te cultiver dans des lieux emplis d’histoire, Bordeaux est faite pour toi !</p>
                </div>
                <div class="bg_beige col-md-7 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-md-2 hidden-xs hidden-sm">M<br>a<br>r<br>d<br>i</h2>
                    <img src="img/bordeaux/culture.jpg" class="col-md-10 col-xs-12">
                </div>
            </div>
            <div id="mercredi" class="row bg_blanc text-muted text-justify">
                <div class="bg_beige col-md-7 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-xs-12 visible-xs visible-sm">Mercredi</h2>
                    <img src="img/bordeaux/" class="col-md-10 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-md-2 hidden-xs hidden-sm">M<br>e<br>r<br>c<br>r<br>e<br>d<br>i</h2>
                </div>
                <div class="col-md-5 col-xs-12">
                    <h3 class="text-center">???</h3>
                    <p class="text-justify">Tu es accro au sport, et les activités proposées par les étudiants des Arts et Métiers ne te suffisent pas ? Bordeaux abrite de nombreux lieux dédiés au sport. La patinoire Mériadeck fait partie des incontournables de la vie sportive bordelaise. Tu pourras patiner sur une piste aux dimensions olympiques et venir voir les matchs de hockey sur glace des Boxers, l’équipe locale. Les quais sont très prisés des coureurs, mais aussi des amateurs de rollers, qui s’y retrouvent pour des balades urbaines comme dans les plus grandes métropoles. Amateur de foot ou de rugby ? Le nouveau stade de Bordeaux a vu le jour en 2016 et accueille de grandes rencontres, du TOP 14 à l’Euro 2016. L’association sportive des Arts et Métiers distribue fréquemment des places gratuites pour les matchs de ligue 1 ou de Top 14, alors profites-en ! </p>
                </div>
            </div>
            <div id="jeudi" class="row bg_blanc text-muted text-justify">
                <h2 class="text-couleur text-center text-uppercase bg_beige col-xs-12 visible-xs visible-sm">Jeudi</h2>
                <div class="col-md-5 col-xs-12">
                    <h3 class="text-center">Chateau de sable dans les dunes</h3>
                    <p class="text-justify">Bordeaux et sa région regorgent de lieux à découvrir. Une après-midi de libre ? A 40min des Arts et Métiers, descends pique-niquer à la Dune du Pilat, te balader dans les forêts de pins ou chiller sur la plage. Tu surfes ? Chaque jeudi après-midi sera l’occasion pour toi de pratiquer ton sport sur les plus beaux spots de la côte Atlantique.</p>
                </div>
                <div class="bg_beige col-md-7 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-md-2 hidden-xs hidden-sm">J<br>e<br>u<br>d<br>i</h2>
                    <img src="img/bordeaux/region.jpg" class="col-md-10 col-xs-12">
                </div>
            </div>
            <div id="vendredi" class="row bg_blanc text-muted text-justify">
                <div class="bg_beige col-md-7 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-xs-12 visible-xs visible-sm">Vendredi</h2>
                    <img src="img/bordeaux/" class="col-md-10 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-md-2 hidden-xs hidden-sm">V<br>e<br>n<br>d<br>r<br>e<br>d<br>i</h2>
                </div>
                <div class="col-md-5 col-xs-12">
                    <h3 class="text-center">On sort boire un verre ?</h3>
                    <p class="text-justify">Tu préfères l’animation urbaine de Bordeaux ? A 19h, rejoins les bordelais dans les nombreux bars à vin et à tapas de la ville, pour une soirée décontractée autour des spécialités du Sud-Ouest. Les influences chaleureuses du Pays Basque et de l’Espagne inspirent les établissements bordelais. Un match de rugby est programmé ce soir ? Les pubs ne manquent pas pour soutenir ton équipe favorite et passer une bonne soirée autour de bières originales. Si tu veux pousser la fête jusqu’au petit matin, les quais et leurs clubs sauront répondre à toutes tes exigences. Le marché des Capucins t’offrira le meilleur petit dej’ de sortie de boite.</p>
                </div>
            </div>
            <div id="we" class="row bg_blanc text-muted text-justify">
                <h2 class="text-couleur text-center text-uppercase bg_beige col-xs-12 visible-xs visible-sm">Week-end</h2>
                <div class="col-md-5 col-xs-12">
                    <h3 class="text-center">Escapades dans le Sud-Ouest</h3>
                    <p class="text-justify">La météo est au beau fixe, et tu n’as pas de test la semaine prochaine ? Tu n’as plus qu’à choisir ta destination préférée ! Les plages landaises et les charmes du pays basque ne sont qu’à quelques pas de Bordeaux, mais pourtant si loin de l’agitation de la métropole ! Si tu veux aller plus loin, l’Espagne n’est qu’à 2h de voiture. Un week-end de fêtes à San Sébastien ou deux belles journées de ski ne sont que quelques-uns des moments privilégiés que la situation de Bordeaux pourra te faire vivre. Pars avec quelques potes faire la tournée des châteaux. Bordeaux n’est pas la capitale du vin pour rien ! Tu pourras découvrir ce patrimoine autour de dégustation, dans une ambiance chaleureuse et bon enfant.</p>
                </div>
                <div class="bg_beige col-md-7 col-xs-12">
                    <h2 class="text-couleur text-center text-uppercase col-md-2 hidden-xs hidden-sm">W<br>e<br>e<br>k<br>-<br>e<br>n<br>d</h2>
                    <img src="img/bordeaux/escapades.jpg" class="col-md-10 col-xs-12">
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>

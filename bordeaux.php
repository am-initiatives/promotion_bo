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
                    <a href="#lundi" class="text-couleur"><h3 class="col-sm-2">Lundi</h3></a>
                    <a href="#mercredi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Mercredi</h3></a>
                    <a href="#vendredi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Vendredi</h3></a>
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
                    <a href="#mardi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Mardi</h3></a>
                    <a href="#jeudi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Jeudi</h3></a>
                    <a href="#we" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Week-end</h3></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section_jours" class="bg_orange text-muted">
        <div class="container">
            <div id="lundi" class="jours">
                <div class="bg_blanc col-ext">
                    <h3 class="text-center">Chateau de sable au Pilat</h3>
                    <p class="text-justify">Bordeaux et sa région regorgent de lieux à découvrir. Une après-midi de libre ? A 40min des Arts et Métiers, descends pique-niquer à la Dune du Pilat, te balader dans les forêts de pins ou chiller sur la plage. Tu surfes ? Chaque jeudi après-midi sera l’occasion pour toi de pratiquer ton sport sur les plus beaux spots de la côte Atlantique.</p>
                </div>
                <div class="bg_beige col-centre">

                </div>
                <div class="col-ext">
                    <img src="img/evenements/ve.jpg">
                </div>
            </div>

            <div id="mercredi" class="jours">
                <div class="col-ext">
                    <img src="">
                </div>
                <div class="bg_beige col-centre">

                </div>
                <div class="bg_blanc col-ext">
                    <h3 class="text-center">Chateau de sable au Pilat</h3>
                    <p class="text-justify"></p>
                </div>
            </div>

            <div id="vendredi" class="jours">

            </div>

            <div id="mardi" class="jours">

            </div>

            <div id="jeudi" class="jours">

            </div>

            <div id="we" class="jours">

            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

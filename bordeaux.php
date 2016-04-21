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

    <section id="section_semaine" class="bg_beige">
        <div class="container">
            <div class="row text-center text-couleur">
                <h3>Notre petit tour de Bordeaux en une semaine...</h3><br>
            </div>
            <div class="row text-center text-uppercase">
                <a href="#section_jours-lundi" class="text-couleur"><h3 class="col-sm-2">Lundi</h3></a>
                <a href="#section_jours-mercredi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Mercredi</h3></a>
                <a href="#section_jours-vendredi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Vendredi</h3></a>
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
                <a href="#section_jours-mardi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Mardi</h3></a>
                <a href="#section_jours-jeudi" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Jeudi</h3></a>
                <a href="#section_jours-we" class="text-couleur"><h3 class="col-sm-2 col-sm-offset-2">Week-end</h3></a>
            </div>
        </div>
    </section>

    <section id="section_jours" class="bg_orange">
        <div class="container">
            <section id="section_jours-lundi">
                <div class="col-md-6 bg_blanc">
                    <h3 class="text-center">Chateau de sable au Pilat</h3>
                    <p class="text-justify"></p>
                </div>
                <img src="" class="col-md-6">
            </section>

            <section id="section_jours-mardi">

            </section>

            <section id="section_jours-mercredi">

            </section>

            <section id="section_jours-jeudi">

            </section>

            <section id="section_jours-vendredi">

            </section>

            <section id="section_jours-we">

            </section>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

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
            <div class="row text-center text-uppercase">
                <a href="#section_jours-lundi" class="text-couleur"><h3 class="col-md-2">Lundi</h3></a>
                <a href="#section_jours-mercredi" class="text-couleur"><h3 class="col-md-2 col-md-offset-2">Mercredi</h3></a>
                <a href="#section_jours-vendredi" class="text-couleur"><h3 class="col-md-2 col-md-offset-2">Vendredi</h3></a>
            </div>
            <div class="row text-center ligne">
                <div class="col-md-2"><div class="point center-block"></div></div>
                <div class="col-md-2"><div class="point center-block"></div></div>
                <div class="col-md-2"><div class="point center-block"></div></div>
                <div class="col-md-2"><div class="point center-block"></div></div>
                <div class="col-md-2"><div class="point center-block"></div></div>
                <div class="col-md-2"><div class="point center-block"></div></div>
            </div>
            <div class="row text-center text-uppercase">
                <a href="#section_jours-mardi" class="text-couleur"><h3 class="col-md-2 col-md-offset-2">Mardi</h3></a>
                <a href="#section_jours-jeudi" class="text-couleur"><h3 class="col-md-2 col-md-offset-2">Jeudi</h3></a>
                <a href="#section_jours-we" class="text-couleur"><h3 class="col-md-2 col-md-offset-2">Week-end</h3></a>
            </div>
        </div>
    </section>

    <section id="section_jours-lundi">
        <div class="container">

        </div>
    </section>

    <section id="section_jours-mardi">
        <div class="container">

        </div>
    </section>

    <section id="section_jours-mercredi">
        <div class="container">

        </div>
    </section>

    <section id="section_jours-jeudi">
        <div class="container">

        </div>
    </section>

    <section id="section_jours-vendredi">
        <div class="container">

        </div>
    </section>

    <section id="section_jours-we">
        <div class="container">

        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

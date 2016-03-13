<?php $page="sports";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="evenements" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_vie_asso">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-3">
                        <a href="associations.php">Associations</a>
                    </li>
                    <li class="col-md-2 ">
                        <a href="sport.php">Sport</a>
                    </li>
                    <li class="col-md-2">
                        <a href="#evenements" class="active">Evenements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_evenements" class="bg_beige">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
            <div class="row bg_sombre">
                <img src="img/evenements/gala.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2 class="text-right text-uppercase text-white">Grand Gala</h2>
                    <p class="text-white">Tu veux organiser le plus Grand Gala d’Aquitaine, qui accueille chaque année des DJs de tous horizons musicaux ? Faire rêver 4000 personnes, avec des spectacles et des groupes étudiants ? Que tu aimes organiser, décorer ou être barman, tous les élèves ingénieurs participent à l’élaboration de la soirée.  Alors rejoins nous dans cette aventure, et participer à l’une des meilleures nuits bordelaises !</p>
                    <p class="text-white">Pour en savoir plus :</p>
                </div>
            </div>
            <div class="row bg_sombre">
                <img src="img/evenements/ve.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2 class="text-right text-uppercase text-white">Soirées VE</h2>
                    <p></p>
                </div>
            </div>
            <div class="row bg_blanc">
                <img src="img/evenements/uai.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2 class="text-right text-uppercase text-muted">Grandes UAI</h2>
                    <p></p>
                </div>
            </div>
            <div class="row bg_blanc">
                <img src="img/evenements/skz.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2 class="text-right text-uppercase text-muted">SKZ</h2>
                    <p></p>
                </div>
            </div>
            <div class="row bg_blanc">
                <img src="img/evenements/croisiere.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 col-xs-12">
                    <h2 class="text-right text-uppercase text-muted">Croisiere AM</h2>
                    <p></p>
                </div>
            </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php $page="associations";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="associations" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_vie_asso">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-3">
                        <a href="associations.php" class="active">Associations</a>
                    </li>
                    <li class="col-md-2 ">
                        <a href="sport.php">Sport</a>
                    </li>
                    <li class="col-md-2">
                        <a href="evenements.php" class="">Evenements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_boquette" class="bg_fonce">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1 class="text-uppercase text-couleur text-center">BEST</h1>
                    <p class="text-muted text-center">Echanges internationaux</p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/best.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">BEST est une association européenne créée par les étudiants pour les étudiants. Implantée dans 33 pays, elle te permettra de voyager partout en Europe et de rencontrer des jeunes de tous horizons. Tu rêves de découvrir une ville européenne à travers sa vie étudiante ? Participe à un « course » associant séminaire technologique, échange culturel et soirées dans les plus grandes universités !</p>
                    <p class="text-justify">A Bordeaux, les élèves ingénieurs organisent chaque année des évènements pour accueillir les étudiants étrangers. Tu pourras donc partager tes connaissances et faire découvrir la région lors d’une semaine haute en couleurs, participer à la compétition d’ingénieur organisée sur le campus. Bien des surprises t’attendent à BEST ! </p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
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
                <h1 class="text-uppercase text-couleur text-center">Aumônerie</h1>
                <p class="text-muted text-center"></p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/aumonerie.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">L’aumônerie des Arts et Métiers rassemble les étudiants autour de leur foi. L’association organise des repas, des réflexions mais aussi des soirées avec les autres aumôneries étudiantes et des évènements avec des anciens élèves de l’école. La messe des étudiants de Bordeaux du dimanche soir est l’occasion pour tous les étudiants du campus de se retrouver. Chaque année, le week-end des rencontres de gadzarts chrétiens réunissent la communauté à Paris pour un moment de convivialité et de débat.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
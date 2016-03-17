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
                <h1 class="text-uppercase text-couleur text-center">Voile</h1>
                <p class="text-muted text-center">Association sportive</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/voile.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Quoi de plus naturel au cœur de la région Bordelaise que de se tourner vers l’océan ? Jeune moussaillon ou navigateur accompli, rejoins chaque jeudi après-midi l’association voile sur le bassin d’Arcachon. Hobie Cat 16 et 420 sont au rendez-vous pour te permettre de naviguer en compagnie des étudiants de Kedge et de Science Po.</p>
                    <p class="text-justify">Chaque année, le campus de Bordeaux-Talence participe à la Course Croisière EDHEC, la plus grande régate étudiante d’Europe, et affronte les équipages des grandes écoles françaises. Retrouve-nous au cœur d’une compétition hors norme et viens défendre ton école !</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
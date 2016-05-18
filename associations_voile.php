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
                    <h1 class="text-uppercase text-couleur text-center">ESCAPADES SPORTIVES</h1>
                    <p class="text-muted text-center">Voile</p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/voile.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Quoi de plus naturel au cœur de la région Bordelaise que de se tourner vers l’océan ? Jeune moussaillon ou navigateur accompli, rejoins chaque jeudi après-midi l’association voile sur le bassin d’Arcachon. Hobie Cat 15 et 420 sont au rendez-vous pour te permettre de naviguer en compagnie des étudiants de Kedge et de Science Po. Les sorties du club voile sont l’occasion de rencontrer les autres écoles et de nouer des liens avec les étudiants de la ville.</p>
                    <p class="text-justify">Il y a quelques années, le campus de Bordeaux-Talence participait à la Course Croisière EDHEC, la plus grande régate étudiante d’Europe. Tu veux monter une équipe et partir défendre ton école ? N’hésite plus, l’association est faite pour toi !</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
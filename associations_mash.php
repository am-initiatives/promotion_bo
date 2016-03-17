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
                <h1 class="text-uppercase text-couleur text-center">Mash - Marathon Shell</h1>
                <p class="text-muted text-center">Défi mécanique</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/mash.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Le MASH, c’est le lieu où tu vas pouvoir tout essayer et te lancer dans un projet innovant et concret. Tu es passionné d’automobile, tu rêves de gagner une course ou tu veux juste t’amuser autour d’un défi international ? Alors rejoins l’équipe ! L’objectif est simple : concevoir un prototype de véhicule pour participer au Marathon Shell.</p>
                    <p class="text-justify">Cette épreuve, qui a lieu chaque année dans une métropole européenne, n’a qu’un but : rouler le plus loin possible avec le moins d’énergie possible. Viens participer à la conception et à l’amélioration des prototypes, et pars avec l’équipe courir pour le Marathon.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
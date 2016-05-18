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
                    <h1 class="text-uppercase text-couleur text-center">DEFI MECANIQUE</h1>
                    <p class="text-muted text-center">MASH (Marathon Shell)</p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/mash.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 text-justify">
                    <p>Tu es passionné d’automobile, tu rêves de gagner une course ou tu veux juste t’amuser autour d’un défi international ?</p>
                    <p>Le MASH, c’est le lieu où tu vas pouvoir tout essayer et te lancer dans un projet innovant et concret. Alors rejoins l’équipe ! L’objectif est simple : concevoir un prototype de véhicule pour participer au Marathon Shell. Cette épreuve, qui a lieu chaque année dans une métropole européenne, n’a qu’un but : rouler le plus loin possible avec le moins d’énergie possible.</p>
                    <p>Viens participer à la conception et à l’amélioration des prototypes, et pars avec l’équipe courir pour le Marathon.</p>
                    <p><i>« J’ai choisi de m’engager au sein de l’association en tant que secrétaire pour voir de plus près ce qui s’y passe, et améliorer la gestion dans l’association. Le MASH est une association très représentative de l’école des Arts : on y développe la créativité, on conçoit, on fabrique, on travaille sur la mécanique. On y trouve aussi un fort esprit d’équipe, très important pour arriver jusqu’à la victoire au Marathon ! » </i></p>
                    <p class="text-center">Quentin, élève de première année, secrétaire du MASH</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
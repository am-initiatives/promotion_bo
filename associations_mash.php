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
                    <p class="text-justify">L’association MASH Bordeaux a pour objectif de concevoir un prototype de véhicule pour participer au Marathon Shell. Celui-ci se déroule chaque année dans une grande ville européenne. (Rotterdam en 2015, Londres en 2016). L’objectif : Rouler le plus loin possible avec le moins d’énergie possible. Chaque année, des étudiants participent ainsi à la conception et à l’amélioration des prototypes de voitures. Après avoir concouru plusieurs années dans la catégorie des moteurs thermiques, le nouveau défi de l’association Mash est de fabriquer un véhicule électrique. </p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
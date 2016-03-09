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

    <section id="section_boquette" class="bg_sombre">
        <div class="container">
            <div class="row">
                <h1 class="titre_section text-couleur text-center">Arts &amp Vins</h1>
                <p class="text-muted text-center">Association d'oenologie</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/artsetvins.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Avec une école située au cœur du vignoble bordelais, Arts et Vins offre la possibilité de découvrir l’œnologie.</p>
                    <p class="text-justify">Grâce aux dégustations organisées dans des châteaux et dans l’école, l’association fait découvrir les vins de la région Bordelaise, mais aussi d’autres vignobles français et internationaux. De nombreuses visites, alliant cultures et dégustations, sont organisés tout au long de l’année. </p>
                    <p class="text-center">Les maitres mots d’Arts et Vins sont la convivialité, la découverte, l’ouverture d’esprit ainsi que l’amour des produits de notre terroir. </p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
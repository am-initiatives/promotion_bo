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
                <h1 class="text-uppercase text-couleur text-center">Arts &amp Vins</h1>
                <p class="text-muted text-center">Association d'oenologie</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/artsetvins.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Amateur de bon vin ou simple curieux néophyte, rejoins Arts et Vins, l’association d’œnologie de l’école. Entre visites de châteaux et soirées de dégustations, tu apprendras à savourer les vins de Bordeaux mais aussi du monde entier. Alliant découvertes et bonne humeur, Arts et Vins saura te faire partager et apprécier le patrimoine régional viticole et ses multiples facettes, allant du Sauternes au Bordeaux Supérieur.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
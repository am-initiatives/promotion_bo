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
                <h1 class="text-uppercase text-couleur text-center">Gasole</h1>
                <p class="text-muted text-center">Association humanitaire</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/gasole.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-center text-muted">La solidarité ne s’arrête pas aux portes de l’école</p>
                    <p class="text-justify">L’association solidaire étudiante des Arts et Métiers concrétise les valeurs chères des Gadzarts : fraternité et solidarité. Gasole est présente sur de grands évènements solidaires, elle participe au Téléthon, aide le Secours Populaire et les Restos du Cœur. De l’éducation au handicap, ses engagements sont nombreux et diversifiés. Tu rêves d’humanitaire ? En t’engageant à Gasole, tu pourras exprimer toute ta générosité près de chez toi, améliorer la vie quotidienne de tes concitoyens et faire rayonner l’école.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
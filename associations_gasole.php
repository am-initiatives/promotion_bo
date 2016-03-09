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
                <h1 class="titre_section text-couleur text-center">Gasole</h1>
                <p class="text-muted text-center">Association humanitaire</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/gasole.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Gasole est l’association solidaire étudiante de l’école des Arts et Métiers. Elle a pour vocation de faire rayonner les valeurs chères aux yeux des Gadzarts : fraternité et solidarité. L’association est présente sur les différents grands évènements solidaires : elle participe au Téléthon, aide le Secours Populaire et les Restos du Cœur dans leurs récoltes alimentaires. De l’éducation au handicap, les engagements de Gasole sont nombreux et diversifiés. Les étudiants n’hésitent pas à aller aux contacts des sans-abris lors de maraudes ou à prêter main forte à l’EFS (Etablissement Français du Sang) lors de récoltes. L’objectif : Que la solidarité ne s’arrête pas aux portes de l’école. </p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
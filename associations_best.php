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
                <h1 class="titre_section text-couleur text-center">BEST</h1>
                <p class="text-muted text-center"></p>
            </div>
            <div class="row">
                <img src="" class="col-md-6">
                <div class="col-md-6">
                    <p class="text-justify">BEST est une association européenne créée par les étudiants, pour les étudiants. Elle est implantée dans 33 pays et touche ainsi un million d’étudiants européens. Depuis 1989, BEST propose des programmes d’échange entre étudiants à travers des séminaires technologiques, des échanges culturels ou des compétitions d’ingénierie. Les étudiants des Arts et Métiers de Bordeaux-Talence organisent chaque année des évènements pour accueillir des étrangers, et partent eux aussi aux quatre coins de l’Europe. Participer à BEST, c’est l’occasion de découvrir de nouvelles cultures, des étudiants de tous horizons et de partager des moments festifs autour d’un apprentissage culturel ou technique.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
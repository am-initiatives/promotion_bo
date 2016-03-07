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
                <h1 class="titre_section text-couleur text-center">AMJE Bordeaux</h1>
                <p class="text-muted text-center">Junior Entreprise</p>
            </div>
            <div class="row">
                <img src="" class="col-md-5">
                <div class="col-md-7">
                    <p>Avec une école située au coeur du vignoble bordelaus, Arts et Vins offre la possibilité de découvrir l'oenologie.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
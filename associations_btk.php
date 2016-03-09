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
                <h1 class="titre_section text-couleur text-center">BTK</h1>
                <p class="text-muted text-center">Association humanitaire</p>
            </div>
            <div class="row">
                <img src="" class="col-md-6">
                <div class="col-md-6">
                    <p class="text-justify">Bouge ton Karma est une association qui participe chaque année à la mise en service de Foster Homes à Bangalore en Inde. Ces maisons accueillent des jeunes filles de 3 à 12 ans, et leur permet ainsi de s’épanouir et de bénéficier d’une formation pour sortir de la rue. Chaque été, une quarantaine d’étudiants part en Inde pour rénover et améliorer les Foster Homes. Rejoins BTK pour découvrir l’Inde à travers un voyage humanitaire sans équivalent.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
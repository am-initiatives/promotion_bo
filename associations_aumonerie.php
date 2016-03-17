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
                <h1 class="text-uppercase text-couleur text-center">Aumônerie</h1>
                <p class="text-muted text-center"></p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/aumonerie.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Pas le temps d’aller à la messe pour Le retrouver parce-que tu as trop de test ? Rejoins l’aumônerie et viens rencontrer les autres étudiants chrétiens du campus qui souhaitent donner un autre sens à leur vie au-delà de la carrière promise par les Arts et Métiers. Autour d’un verre après la messe du dimanche soir ou lors des concerts du couvent des Dominicains, le dialogue et le débat sont au cœur de la vie de l’aumônerie. </p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
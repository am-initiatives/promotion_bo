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
                    <h1 class="text-uppercase text-couleur text-center">RELIGION</h1>
                    <p class="text-muted text-center">L'aumônerie</p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/aumonerie.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 text-justify">
                    <p>Pas le temps d’aller à la messe pour Le retrouver parce-que tu as trop de test ? Rejoins l’aumônerie et viens rencontrer les autres étudiants chrétiens du campus qui souhaitent donner un autre sens à leur vie au-delà de la carrière promise par les Arts et Métiers.</p>
                    <p>Autour d’un verre après la messe du dimanche soir ou lors des concerts du couvent des Dominicains, le dialogue et le débat sont au cœur de la vie de l’aumônerie.</p>
                    <p><i>« L’aumônerie, ce sont de bons moments partagés pour essayer de faire une petite place à Dieu au milieu de notre campus hyperactif ! »</i></p>
                    <p class="text-center">Augustin, élève de deuxième année</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
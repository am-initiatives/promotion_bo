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
                    <h1 class="text-uppercase text-couleur text-center">HUMANITAIRE</h1>
                    <p class="text-muted text-center">BTK</p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/btk.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 text-justify">
                    <p>L’association humanitaire Bouge ton Karma vient en aide à des fillettes défavorisées dans le sud de l’Inde. L’objectif est de leur permettre de s’épanouir et de bénéficier d’une formation pour sortir de la rue.</p>
                    <p>Fondée en partenariat avec les étudiants en médecine de Toulouse, elle envoie chaque année une quarantaine d’élèves ingénieurs dans la région de Bangalore. Leur mission : construire et rénover des Foster Homes, maisons d’accueils des jeunes filles, mais aussi divertir les habitantes toute la durée du séjour.</p>
                    <p>Si tu rêves de t’engager dans l’humanitaire, de découvrir une culture et un mode de vie bien loin des coutumes occidentales, rejoins BTK et pars à l’aventure ! Tu sortiras transformé de cette expérience hors du commun et accessible à tous. </p>
                    <p><i>« Partir en Inde fut une expérience culturelle extraordinaire ! Je suis ressorti grandi de ce séjour, j’y ai fait des rencontres très enrichissante, et qui m’ont fait prendre conscience de l’importance de certains aspects citoyens, comme l’hospitalité, l’ouverture d’esprit… La question ne s’est même pas posée lorsqu’il a fallu donner de son temps pour développer cette association à mon retour en France ! » </i></p>
                    <p class="text-center">Eric, élève de deuxième année, investi dans l’association BTK depuis deux ans</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
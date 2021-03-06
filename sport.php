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
                    <li class="col-md-2 col-md-offset-3 col-sm-4">
                        <a href="associations.php">Associations</a>
                    </li>
                    <li class="col-md-2 col-sm-4">
                        <a href="#associations" class="active">Sports</a>
                    </li>
                    <li class="col-md-2 col-sm-4">
                        <a href="evenements.php">Evenements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_bds" class="bg_beige">
        <div class="container">
            <h2 class="text-uppercase text-couleur">A Propos du Bureau Des Sports - BDS</h2>
            <p class="text-muted text-justify">Le bureau des sports organise et gère toutes les activités sportives de l’école. Collectif ou individuel, en salle ou à l’extérieur, débutant ou confirmé, il y en a pour tous les goûts !
                Les équipes se préparent tout au long de l’année aux Grandes UAI, le plus grand rassemblement sportif de France, qui regroupe tous les centres Arts et Métiers. La majorité d’entre elles sont inscrites en tournoi universitaire.
                Le BDS utilise deux gymnases, des terrains de foot et de rugby ainsi qu’une piscine et des terrains de tennis à deux pas de la résidence. Pas besoin de prendre la voiture pour aller faire du sport, tout se fait sur le campus !</p>
            <p class="text-muted text-justify"><i>« Après mes deux années de prépa, pendant lesquelles j’avais dû arrêter pour travailler, j’ai pu reprendre le sport. Ayant fait 14 ans de judo, j’ai eu envie de découvrir autre chose en m’investissant dans les sports collectifs. Je suis devenue entraineuse des équipes de handball et de volleyball féminines. Nous participons aux tournois universitaires et même si les victoires ne sont pas toujours au rendez-vous, la bonne humeur et la cohésion sont toujours de mise ! L’objectif final de l’année ? Gagner les UAI, le tournoi sportif regroupant tous les campus des Arts ! »</i></p>
        </div>
    </section>

    <section id="section_sport">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Les sports proposés</h2>
            <div class="row">
                <img src="img/sport/athletisme.jpg" class="col-md-6 col-xs-12">
                <img src="img/sport/badminton.jpg" class="col-md-6 col-xs-12">
            </div>
            <div class="row">
                <img src="img/sport/basket.jpg" class="col-md-6 col-xs-12">
                <img src="img/sport/boxe.jpg" class="col-md-6 col-xs-12">
            </div>
            <div class="row">
                <img src="img/sport/escalade.jpg" class="col-md-6 col-xs-12">
                <img src="img/sport/foot.jpg" class="col-md-6 col-xs-12">
            </div>
            <div class="row">
                <img src="img/sport/futsal.jpg" class="col-md-6 col-xs-12">
                <img src="img/sport/hand.jpg" class="col-md-6 col-xs-12">
            </div>
            <div class="row">
                <img src="img/sport/musculation.jpg" class="col-md-6 col-xs-12">
                <img src="img/sport/natation.jpg" class="col-md-6 col-xs-12">
            </div>
            <div class="row">
                <img src="img/sport/pompom.jpg" class="col-md-6 col-xs-12">
                <img src="img/sport/rugby.jpg" class="col-md-6 col-xs-12">
            </div>
            <div class="row">
                <img src="img/sport/tennis.jpg" class="col-md-6 col-xs-12">
                <img src="img/sport/volley.jpg" class="col-md-6 col-xs-12">
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

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
                    <h1 class="text-uppercase text-couleur text-center">PHOTOGRAPHIE</h1>
                    <p class="text-muted text-center">Club photo</p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/photo.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 text-justify">
                    <p>Tu es passionné par la photographie, ou tu souhaites immortaliser les meilleurs moments de ta vie à l’école ? Rejoins le club photo et deviens le paparazzi des évènements les plus marquants de l’année : Gala, soirées, repas, et bien d’autres encore. </p>
                    <p>Le club photo est un élément clef de la vie de la communauté, il permet de centraliser tous les clichés, de réaliser des albums de promo, mais aussi de garder une trace de tous les souvenirs inoubliables que tu partageras durant tes années aux Arts !</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
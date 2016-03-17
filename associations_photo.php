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
                <h1 class="text-uppercase text-couleur text-center">Club photo</h1>
                <p class="text-muted text-center">Association de photographie</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/photo.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Tu es passionné par la photographie, ou tu souhaites immortaliser les meilleurs moments de ta vie à l’école ? Rejoins le club photo et deviens le paparazzi des évènements les plus marquants de l’année : Gala, soirées, repas, et bien d’autres encore. Grâce au laboratoire de développement photo installé en 2016 dans l’une des résidences, tu pourras réaliser des tirages de qualité professionnelle. Le club photo est un élément clef de la vie de la communauté, il permet de centraliser tous les clichés, de réaliser des albums de promo, mais aussi de garder une trace de tous les souvenirs inoubliables que tu partageras durant tes années aux Arts !</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
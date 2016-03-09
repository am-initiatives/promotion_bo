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
                <h1 class="titre_section text-couleur text-center">Club photo</h1>
                <p class="text-muted text-center"></p>
            </div>
            <div class="row">
                <img src="" class="col-md-6">
                <div class="col-md-6">
                    <p class="text-justify">Tu es passionné par la photographie, ou tu souhaites immortaliser les meilleurs moments de ta vie à l’école ? Rejoins le club photo et deviens le paparazzi des évènements les plus marquants de l’année : Gala, soirées, repas, et bien d’autres encore. Un laboratoire de développement photo a été installé en 2016 dans l’une des résidences. Tu pourras ainsi réaliser des tirages de professionnels. Le club photo est un élément clef de la vie de la communauté, il permet de centraliser toutes les photos pour les albums de promo, mais aussi de garder une trace du passage des étudiants et d’avoir des souvenirs inoubliables sur papier glacé.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
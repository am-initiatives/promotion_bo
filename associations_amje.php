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
                <h1 class="text-uppercase text-couleur text-center">AMJE Bordeaux</h1>
                <p class="text-muted text-center">Junior Entreprise</p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/amje.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">AMJE Bordeaux est une Junior-Entreprise gérée par les élèves ingénieurs. Travaillant en collaboration avec des particuliers et des professionnels depuis plus de 30 ans, AMJE permet à tous les étudiants de commencer à rentrer dans le monde de l’entreprise.</p>
                    <p class="text-justify">Tu souhaites acquérir des compétences professionnelles et te former hors du cursus scolaire classique ? Alors rejoins l’équipe, forme toi à des métiers concrets de l’entreprise et lance-toi dans un projet professionnel ! Que tu sois attiré par le BTP, les nouvelles technologies ou que tu souhaites réaliser un projet innovant et original, participer à AMJE sera un atout dans ta formation.</p>
                    <p class="text-center">Pour tout renseignements : <a href="http://www.amje-bordeaux.fr">www.amje-bordeaux.fr</a></p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
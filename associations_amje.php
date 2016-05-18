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
                    <h1 class="text-uppercase text-couleur text-center">MONDE PROFESSIONNEL</h1>
                    <p class="text-muted text-center">AMJE Bordeaux</p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/amje.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6 text-justify">
                    <p>AMJE Bordeaux est une Junior-Entreprise gérée par les élèves ingénieurs. Travaillant en collaboration avec des particuliers et des professionnels depuis plus de 30 ans, AMJE permet à tous les étudiants de commencer à rentrer dans le monde de l’entreprise.</p>
                    <p>Tu souhaites acquérir des compétences professionnelles et te former hors du cursus scolaire classique ? Alors rejoins l’équipe, forme toi à des métiers concrets de l’entreprise et lance-toi dans un projet professionnel ! Que tu sois attiré par le BTP, les nouvelles technologies ou que tu souhaites réaliser un projet innovant et original, participer à AMJE sera un atout dans ta formation.</p>
                    <p class="text-center">Pour tout renseignements : <a href="http://www.amje-bordeaux.fr">www.amje-bordeaux.fr</a></p>
                </div>
            </div>
            <div class="row justify">
                <div class="col-md-6">
                    <i>« J’ai toujours souhaité orienter ma carrière d’ingénieur vers le business. J’ai choisi en rentrant aux Arts de m’investir dans l’association qui apporte le plus de professionnalisme. Je souhaiter acquérir de l’expérience sur l’entreprise et donner une cohérence à mon parcours. AMJE apporte beaucoup de compétences parallèles à celles apportées par les cours. Les projets permettent de mettre en pratique concrètement certains aspects théoriques des cours. » </i>
                    <p class="text-center">Olivier, élève de première année</p>
                </div>
                <div class="col-md-6">
                    <i>« Intégrer une Junior-Entreprise est une expérience très enrichissante, qui permet à chacun d’évoluer dans un cadre dynamique, de rencontrer des professionnels, tout en étant profitant d’un dense réseau de Junior-Entrepreneurs. C’est une aventure unique qui permet de saisir un grand nombre d’opportunités, comme participer régulièrement à des congrès regroupant les Junior-Entrepreneurs de toute la France. »</i>
                    <p class="text-center">Vincent, élève de première année</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
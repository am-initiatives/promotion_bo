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
                        <a href="#associations" class="active">Associations</a>
                    </li>
                    <li class="col-md-2 col-sm-4">
                        <a href="sport.php">Sport</a>
                    </li>
                    <li class="col-md-2 col-sm-4">
                        <a href="evenements.php">Evenements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_associations" class="bg_beige text-center">
        <div class="container">
            <p class="text-muted text-center"><i>(Cliquer sur les logos des associations pour plus d'informations)</i></p>
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a href="associations_amje.php" class="cadre_logo"><img src="img/associations/amje.jpg" class="col-xs-12 img-responsive"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_artsetvins.php" class="cadre_logo"><img src="img/associations/artsetvins.jpg" class="col-xs-12"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_aumonerie.php" class="cadre_logo"><img src="img/associations/aumonerie.jpg" class="col-xs-12 img-responsive"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_best.php" class="cadre_logo"><img src="img/associations/best.jpg" class="col-xs-12"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a href="associations_btk.php" class="cadre_logo"><img src="img/associations/btk.jpg" class="col-xs-12"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_ems.php" class="cadre_logo"><img src="img/associations/ems.jpg" class="col-xs-12"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_gasole.php" class="cadre_logo"><img src="img/associations/gasole.jpg" class="col-xs-12"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_mash.php" class="cadre_logo"><img src="img/associations/mash.jpg" class="col-xs-12"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a href="associations_journal.php" class="cadre_logo"><img src="img/associations/journal.jpg" class="col-xs-12"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_rando.php" class="cadre_logo"><img src="img/associations/rando.jpg" class="col-xs-12"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_photo.php" class="cadre_logo"><img src="img/associations/photo.jpg" class="col-xs-12"></a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="associations_voile.php" class="cadre_logo"><img src="img/associations/voile.jpg" class="col-xs-12"></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section_associations">
        <div class="container">
            <div class="col-xs-12 text-muted text-justify">
                <h2 class="text-uppercase text-couleur">A Propos de l'association des élèves</h2>
                <p class="text-center">Favoriser, Promouvoir et Développer la vie associative aux Arts et Métiers</p>
                <p>La quasi-totalité des associations présentées ci-dessus est gérée par l’AE ENSAM Bordeaux, l’association des élèves. Traditionnellement, tous les élèves ingénieurs présents sur le campus font partie de l’association. Cela leur permet de participer aux évènements, d’adhérer aux différents clubs, de profiter des locaux associatifs.
                    Le bureau de l’AE donne aux étudiants les moyens de profiter un maximum de leurs années aux Arts et Métiers. Il conseille et aide tous ceux qui souhaitent monter un projet culturel, sportif ou festif. L’AE finance les clubs, leur fournit les locaux... Tu veux te lancer ? N’hésite pas, le cadre associatif des Arts et Métiers est là pour ça !</p>
                <p><i>« L’ensemble de mon investissement dans les associations m’a permis de me familiariser avec les techniques de management, de communication et de partage des informations. J’ai aussi développé de nombreuses compétences en gestion de projet et appris à gérer le travail d’équipe. Certaines associations permettent aussi d’utiliser des outils non enseignés à l’école, comme les outils de graphisme. Participer aux activités associatives est l’expérience la plus enrichissante de la vie aux Arts. »</i></p>
                <p><i>« L’investissement personnel aux seins d’associations apporte un plus dans la vie d’étudiant. Et puis, découvrir qu’il y a toutes les infrastructures pour refaire du sport ou de la musique après la prépa donne envie de s’y remettre. La vie associative, c’est aussi l’occasion de partager avec sa promo mais aussi avec les autres promotions de l’école. »</i></p>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

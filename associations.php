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
                        <a href="#associations" class="active">Associations</a>
                    </li>
                    <li class="col-md-2 ">
                        <a href="sport.php">Sport</a>
                    </li>
                    <li class="col-md-2">
                        <a href="evenements.php">Evenements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_associations" class="bg_beige text-center">
        <div class="container">
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
            <div class="row">
                <h2 class="text-uppercase text-couleur">A Propos de l'association des élèves</h2>
                <p class="text-muted text-justify col-xs-12">L’association des Elèves (AE) des Arts et Métiers (équivalent du BDE) rassemble tous les étudiants du campus de Bordeaux-Talence. Le bureau est composé de 6 étudiants (président, vice-président, trésorier, responsable partenariat, responsable communication et responsable vie étudiante). La vocation de l’association est d’organiser et de gérer les relations entre les diverses entités de la communauté, et de favoriser le développement de la vie associative du campus. La majorité des associations présentées ci-dessus (hormis AMJE et BTK) sont pilotés par l’AE. Le rôle du bureau est de leur offrir les meilleures conditions pour s’épanouir : financement, locaux, assurance… L’AE est là pour conseiller les élèves ingénieurs qui souhaitent monter un projet culturel, sportif, ou festif et leur permettre de profiter au maximum de ces années aux Arts et Métiers. Cette dynamique associative permet à l’école de rayonner.</p>
                <p class="text-muted text-center col-xs-12">La devise de l’AE : favoriser, promouvoir et développer la vie associative aux Arts et Métiers</p>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

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
                        <a href="sport.php">Sport</a>
                    </li>
                    <li class="col-md-2 col-sm-4">
                        <a href="#associations" class="active">Evenements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_evenements" class="bg_beige">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="row bg_sombre text-white text-justify">
                    <img src="img/evenements/gala.jpg" class="col-md-6 col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <h2 class="text-right text-uppercase">Grand Gala</h2>
                        <p>Tu veux organiser le plus Grand Gala d’Aquitaine, qui accueille chaque année des DJs de tous horizons musicaux ? Faire rêver 4000 personnes, avec des spectacles et des groupes étudiants ?</p>
                        <p>Que tu aimes organiser, décorer ou être barman, tous les élèves ingénieurs participent à l’élaboration de la soirée.  Alors rejoins nous dans cette aventure, et participer à l’une des meilleures nuits bordelaises !</p>
                        <p>Pour en savoir plus : <a href="http://ggbo.gadz.org">http://ggbo.gadz.org</a></p>
                    </div>
                </div>
                <div class="row bg_sombre text-white text-justify">
                    <img src="img/evenements/ve.jpg" class="col-md-6 col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <h2 class="text-right text-uppercase">Soirées VE</h2>
                        <p>Que serait la vie aux Arts et Métiers sans ses célèbres Soirées VE ? Le principe est simple : tu invites tes amis, tu viens et tu t’amuses !</p>
                        <p>La Vie Étudiante des Arts et Métiers est le pôle évènementiel de l’école. Il se charge de te transmettre les bons plans de sorties en ville ou dans les écoles voisines ; mais surtout d’organiser et d’animer des soirées et apéros toute l’année.</p>
                        <p>Que ce soit pour la Saint Patrick ou à Noël, la VE ne manque jamais une occasion de rassembler le tissu étudiant local pour faire la fête avec les DJ du campus. Alors, tu viens quand ?</p>
                    </div>
                </div>
                <div class="row bg_blanc text-muted text-justify">
                    <img src="img/evenements/uai.jpg" class="col-md-6 col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <h2 class="text-right text-uppercase">Grandes UAI</h2>
                        <p>Tu rêves des jeux olympiques ? Les Arts et Métiers t’offrent encore plus : les Grandes UAI ! Cet évènement est l’un des plus grands rassemblements sportifs étudiants de France, avec plus de 1000 étudiants réunis durant 4jours !</p>
                        <p>Au programme pour les sportifs, tous types de sport, du rugby à la pétanque en passant par les sports à raquette, la natation, l’athlétisme et l’inimitable concours de pompom girls !</p>
                        <p>Tu n’es pas sportif ? Viens encourager les équipes de ton campus et participer aux animations du week-end : babyfoot humains, concerts, soirées, concours en tout genre. Retrouve les Gadzarts de toute la France pour te plonger dans une ambiance hors du commun !</p>
                    </div>
                </div>
                <div class="row bg_blanc text-muted text-justify">
                    <img src="img/evenements/skz.jpg" class="col-md-6 col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <h2 class="text-right text-uppercase">SKZ</h2>
                        <p>Ski’O’Zarts, c’est une semaine de ski et de fête pour tous ! Plus de 1200 étudiants se retrouvent dans une station des Alpes durant une semaine à un prix défiant toute concurrence !</p>
                        <p>Que tu sois débutant ou expérimenté et avide de sensations, les responsables s’occupent de tout pour te permettre de profiter un maximum : compétitions pour les meilleurs, cours d’initiations pour ceux qui le souhaitent. Après une descente aux flambeaux, les bars de la station t’attendent pour des soirées spéciales pleines de surprises !</p>
                    </div>
                </div>
                <div class="row bg_blanc text-muted text-justify">
                    <img src="img/evenements/croisiere.jpg" class="col-md-6 col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <h2 class="text-right text-uppercase">Croisiere AM</h2>
                        <p>La croisière AM, c’est une occasion unique de partir faire un trip avec ta bande ! Un voilier pour dix personnes, les criques de Croatie, des soirées, que demander de plus ?</p>
                        <p>Une équipe s’occupe de réserver les bateaux et de t’organiser le voyage, avec kit de nourriture et transport. Tu n’as plus qu’à profiter de ce cadre de rêve ! La seule règle ? Que l’un de vous soit skipper. En étant à Bordeaux, tu auras toute l’année pour passer les certifications et sortir naviguer.</p>
                        <p>Alors, une semaine de chill sur les eaux turquoise, ça te tente ?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
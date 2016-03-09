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
                <h1 class="titre_section text-couleur text-center">Musique</h1>
                <p class="text-muted text-center">Groupes de musique</p>
            </div>
            <div class="row">
                <img src="" class="col-md-6">
                <div class="col-md-6">
                    <p class="text-justify">L’Em’ss, c’est l’association musicale de l’école. Que tu joues d’un instrument ou que tu chantes, viens monter un groupe dans une salle de musique équipée et refaite à neuf en 2016. Les groupes de l’école se produisent lors de soirées au bar de l’école et lors du gala dans une salle qui leur est dédiée. Tu sais mixer ? Viens animer les soirées étudiantes qui réunissent tout le campus de Talence.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
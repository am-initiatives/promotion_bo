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
                    <h1 class="text-uppercase text-couleur text-center">Journal de l'école</h1>
                    <p class="text-muted text-center"></p>
                </div>
                <div class="col-xs-2 text-right">
                    <a href="associations.php"><i class="fa fa-3x fa-times" style="color:grey;"></i></a>
                </div>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/journal.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Distribué chaque semaine, le journal de l’école permet aux étudiants de laisser parler le reporter qui est en eux. Liberté d’expression, voilà le maitre mot de cet hebdomadaire, qui garde toujours sa tonalité humoristique quels que soient les évènements. Il contient toutes les actualités de la vie associative du campus, les comptes rendus de réunion de l’association des élèves mais aussi des billets drôles, critiques ou informatifs. Que tu sois rédacteur occasionnel ou fervent journaliste, le « Thuiss » saura t’accueillir au sein de ses pages, et aura besoin de toi pour être imprimé et distribué sur le campus !</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
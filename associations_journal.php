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
                <h1 class="text-uppercase text-couleur text-center">Journal de l'école</h1>
                <p class="text-muted text-center"></p>
            </div>
            <div class="row">
                <img src="img/associations/illustrations/journal.jpg" class="col-md-6 col-xs-12">
                <div class="col-md-6">
                    <p class="text-justify">Le journal de l’école, distribué chaque semaine, permet aux étudiants de laisser libre court à leur imagination et à leurs envies de reporter. Liberté d’expression, voilà le maître mot de ce journal, qui prend chaque semaine une orientation différente. Il contient également toutes les actualités de la vie associative du campus et les comptes rendus de réunion de l’association des élèves. Que tu sois rédacteur occasionnel ou fervent journaliste, le « Thuyss » saura t’accueillir au sein de ses pages, et aura besoin de toi pour être imprimé et distribué sur le campus !</p>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
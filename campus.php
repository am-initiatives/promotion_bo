<?php $page="campus";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="campus" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_campus">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-4 col-sm-6">
                        <a href="" class="active">Campus</a>
                    </li>
                    <li class="col-md-2 col-sm-6">
                        <a href="vie_pratique.php">Vie Pratique</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_domaine" class="bg_beige">
        <div class="container">
            <div class="row">
                <h2 class="text-uppercase text-couleur">Le domaine universitaire</h2>
                <p class="text-muted text-justify">L’Ecole des Arts et Métiers de Bordeaux-Talence est implantée sur le domaine universitaire Talence-Pessac-Gradignan, plus grand campus de l’agglomération bordelaise. Il accueille environ 65 000 étudiants, 5 000 chercheurs et enseignants et 3 000 membres du personnel. D’une superficie totale de 235 hectares, il s’agit du deuxième plus grand campus de France après Paris-Sud. Le tramway (ligne B) traverse le campus par les stations Peixotto, Béthanie, Arts et Métiers, François Bordes, Doyen Brus, Montaigne Montesquieu et UNITEC.</p>
                <img src="img/campus/campus.jpg" class="">
            </div>
        </div>
    </section>

    <section id="section_ecoles">
        <div class="container">
                <h2 class="text-uppercase text-couleur text-right">Les écoles présentes sur la campus</h2>
            <div class="row text-center">
                <img src="img/campus/logos_gris/ensap.jpg" class="col-md-2 col-md-offset-1">
                <img src="img/campus/logos_gris/inp.jpg" class="col-md-2">
                <img src="img/campus/logos_gris/optique.jpg" class="col-md-2">
                <img src="img/campus/logos_gris/isvv.jpg" class="col-md-2">
                <img src="img/campus/logos_gris/iut.jpg" class="col-md-2">
            </div>
            <div class="row">

            </div>
            <div class="row text-center">
                <img src="img/campus/logos_gris/kedge.jpg" class="col-md-2 col-md-offset-1">
                <img src="img/campus/logos_gris/agro.jpg" class="col-md-2">
                <img src="img/campus/logos_gris/sciencespo.jpg" class="col-md-2">
                <img src="img/campus/logos_gris/montaigne.jpg" class="col-md-2">
                <img src="img/campus/logos_gris/universite.jpg" class="col-md-2">
            </div>
            <div class="row">

            </div>
        </div>
    </section>

    <section class="section_ecoles">
        <div class="container">

        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

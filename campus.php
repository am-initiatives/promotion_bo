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
                <img src="img/campus/campus.jpg" class="img-responsive">
            </div>
        </div>
    </section>

    <section id="section_ecoles">
        <div class="container">
            <h2 class="text-uppercase text-couleur text-right">Les écoles présentes sur le campus universitaire</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11324.579587075137!2d-0.604891800815385!3d44.798235617418264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x4331235e25afe43d!2sArts+et+M%C3%A9tiers+ParisTech!5e0!3m2!1sfr!2sfr!4v1459252862402" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

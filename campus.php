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
                    <li class="col-md-2 col-md-offset-3">
                        <a href="#campus" class="active">Campus</a>
                    </li>
                    <li class="col-md-2">
                        <a href="vie_pratique.php">Vie Pratique</a>
                    </li>
                    <li class="col-md-2">
                        <a href="bordeaux.php">Bordeaux</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_domaine" class="bg_beige">
        <div class="container">
            <h2 class="text-uppercase text-couleur">Le domaine universitaire</h2>
            <p class="text-muted text-justify">L’Ecole des Arts et Métiers est au cœur du plus grand campus de l’agglomération bordelaise, deuxième plus grand de France après Paris-Sud. Le domaine universitaire Talence-Pessac-Gradignan accueille 65 000 étudiants sur une superficie de 235 hectares.</p>
            <p class="text-muted text-justify">Il regroupe tout type d’école et de nombreuses filières universitaires différentes. L’une des plus grandes bibliothèques universitaires de Bordeaux est située à 5 minutes à pied de l’Ecole, face au tramway. Le RU est juste à côté, tu pourras manger à deux pas des cours pour 3,25€.</p>
            <img src="img/campus/campus.jpg" class="img-responsive">
        </div>
    </section>

    <section id="section_ecoles">
        <div class="container">
            <h2 class="text-uppercase text-couleur text-right">Les écoles présentes sur le campus</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/u/1/embed?mid=1JBKejtUyXrwUORnMFz26oYHiafw"></iframe>
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

<?php $page="etudes";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="etudes" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_etudes">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-3">
                        <a href="cursus.php">Cursus</a>
                    </li>
                    <li class="col-md-2 ">
                        <a href="#etudes" class="active">Témoignages</a>
                    </li>
                    <li class="col-md-2">
                        <a href="international.php">International</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_experience" class="bg_beige">
        <div class="container">
            <h2 class="text-center text-couleur">Quand des élèves des Arts et Métiers de Bordeaux partagent leur expérience...</h2>
        </div>
    </section>

    <section id="section_temoignages">
        <div class="container">

        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

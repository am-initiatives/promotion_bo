<?php $page="sports";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="evenements" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_vie_asso">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-3">
                        <a href="associations.php">Associations</a>
                    </li>
                    <li class="col-md-2 ">
                        <a href="sport.php">Sport</a>
                    </li>
                    <li class="col-md-2">
                        <a href="#evenements" class="active">Evenements</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_evenements" class="bg_beige text-center">
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
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
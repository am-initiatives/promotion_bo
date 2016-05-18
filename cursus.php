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
                        <a href="#etudes" class="active">Cursus</a>
                    </li>
                    <li class="col-md-2 ">
                        <a href="temoignages.php">Témoignages</a>
                    </li>
                    <li class="col-md-2">
                        <a href="international.php">International</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_contexte" class="bg_beige">
        <div class="container">
            <div class="row">
                <h2 class="text-uppercase text-couleur text-right col-md-10 col-md-offset-1">Contexte</h2>
                <img src="img/cursus/aero.jpg" class="img-responsive img-circle center-block col-md-3 col-md-offset-1">
                <p class="text-muted text-justify col-md-7">Chaque campus Arts et Métiers a une identité particulière, liée aux entreprises alentours et aux domaines d’expertise. Le campus de Bordeaux est tourné vers l’aéronautique. Installé au cœur de l’Aerospace Valley, il tire ses racines des entreprises du secteur présentes dans la région.</p>
                <p class="text-muted text-justify col-md-7">Grâce au réseau des anciens élèves, le lien avec l’industrie locale est très fort. Il se traduit par des visites d’entreprises, des journées de conférences sur le domaine, des ateliers de rencontres. Les professeurs sont également très imprégnés par cette culture, de nombreux cours basent leurs exemples sur l’aéronautique.</p>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <h1 class="text-uppercase text-couleur text-center">Cursus</h1>
        </div>
    </div>

    <section id="section_cursus" class="bg_beige">
        <div class="container">
            <div class="row col-md-10 col-md-offset-1 infos">
                <img src="img/cursus/usinage.jpg" class="img-responsive">
                <h4 class="text-uppercase text-couleur text-center">La pratique mise en avant</h4>
                <p class="text-muted text-justify">D’autres particularités distinguent chaque campus, notamment en termes d’infrastructure. Bordeaux possède un atelier d’usinage refait à neuf en 2015. Il accueille de nombreuses machines sur une surface de xxx m². Un groupe de techniciens est à la disposition des étudiants pour les aider à réaliser leurs projets. <a href="#nogo" onclick="document.getElementById('suitePratique').style.display = 'block'; this.style.display = 'none';">Lire la suite...</a></p>
                <p id="suitePratique" class="text-muted text-justify">Les TP sont nombreux dans l’atelier. Tu devras enfiler ton bleu et tes chaussures de sécurité pour pratiquer sur les tours et les fraiseuses de l’atelier, mais aussi sur des machines telles que la découpe jet d’eau ou la plieuse. Tu auras également l’occasion d’utiliser ces machines au cours des nombreux projets qui jalonnent les études.</p>
            </div>
            <div class="row col-md-10 col-md-offset-1 infos">
                <img src="img/cursus/edt.jpg" class="img-responsive">
                <h4 class="text-uppercase text-couleur text-center">Des matières variées</h4>
                <p class="text-muted text-justify">Les semaines aux Arts et Métiers sont chargées, avec en moyenne 35h de cours par semaine ! Amphis, TD, TP et projets rythmeront tes journées dans des matières très diverses. <a href="#nogo" onclick="document.getElementById('suiteMatieres').style.display = 'block'; this.style.display = 'none';">Lire la suite...</a></p>
                <p id="suiteMatieres" class="text-muted text-justify">La première année est là pour consolider les bases acquises en classe prépa, et en acquérir de nouvelles. Electricité, Mécanique, Thermique, Production Industrielle seront les piliers de ton année. Le campus possède également une forte empreinte en termes de cours d’Economie.<br><br>
                    Les deux langues enseignées à l’école sont l’anglais et l’espagnol, toutes deux obligatoires. Si tu souhaites étudier d’autres langues, tu pourras prendre des cours à l’université de Bordeaux.</p>
            </div>
            <div class="row col-md-10 col-md-offset-1 infos">
                <img src="img/cursus/calendrier.jpg" class="img-responsive">
                <h4 class="text-uppercase text-couleur text-center">Début de la vie pro</h4>
                <p class="text-muted text-justify">Comme dans toutes les écoles d’ingénieurs, il te faudra valider des stages pour obtenir ton diplôme. Trois périodes de stages sont offertes par les Arts et Métiers. <a href="#nogo" onclick="document.getElementById('suiteViePro').style.display = 'block'; this.style.display = 'none';">Lire la suite...</a></p>
                <p id="suiteViePro" class="text-muted text-justify">La première, d’un mois, a lieu en première année et permet de réaliser un stage opérateur. Ce stage est l’occasion de découvrir le monde de l’entreprise et les conditions de travail des ouvriers que tu auras sûrement à manager plus tard.<br><br>
                    Le second stage est facultatif. A la fin de la 2ème année, tu peux en effet te faire conventionner un stage de 3 mois Assistant ingénieur, pour te familiariser avec ton futur métier et la réalité du terrain. L’objectif est de se construire un CV avec des expériences professionnelles pour être solidement armé à la sortie de l’école.<br><br>
                    En 3ème année, le projet de fin d’étude (PFE) est un stage de 6 mois durant lequel tu réalises un projet pour une entreprise. Le lien fort avec les anciens élèves permet de rencontrer des ingénieurs dans tous les domaines de l’industrie d’aujourd’hui, de l’aéronautique au luxe, du BTP aux start-ups high-tech. Mais la recherche de stage est toujours une phase compliquée, n’oublie pas de t’y prendre tôt.</p>
            </div>
            <div class="row col-md-10 col-md-offset-1 infos">
                <img src="img/cursus/diplome.jpg" class="img-responsive">
                <h4 class="text-uppercase text-couleur text-center">Un suivi jusqu'au diplôme</h4>
                <p class="text-muted text-justify">Un accompagnement personnalisé a été mis en place sur le campus de Bordeaux, avec un tuteur professeur mais aussi un tuteur ingénieur. Cet accompagnement, réalisé grâce au tutorat et à des interventions d’extérieurs qualifiés sur le sujet, t’aidera à construire ton projet professionnel. <a href="#nogo" onclick="document.getElementById('suiteDiplome').style.display = 'block'; this.style.display = 'none';">Lire la suite...</a></p>
                <p id="suiteDiplome" class="text-muted text-justify">Tu ne sais pas dans quel domaine tu souhaiterais travailler plus tard, ou sur quel type de poste ? Ne t’inquiète pas, tes années aux Arts et Métiers sont aussi l’occasion d’en découvrir plus sur tes envies et de te renseigner sur les orientations possibles. </p>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<nav class="navbar-default">
    <div class="container">
        <!-- Gestion du menu déroulant sur mobile -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Liens du menu -->
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav">
                <li class="col-md-2 col-md-offset-1 lien_logement">
                    <a href="logement.php"<?php if($page=="logement"){echo ' class="active"';}?>>Logement</a>
                </li>
                <li class="col-md-2 lien_campus">
                    <a href="campus.php"<?php if($page=="campus"){echo ' class="active"';}?>>Campus</a>
                </li>
                <li class="col-md-2 lien_accueil">
                    <a href="index.php"<?php if($page=="accueil"){echo ' class="active"';}?>>Accueil</a>
                </li>
                <li class="col-md-2 lien_ve">
                    <a href="associations.php"<?php if($page=="associations"){echo ' class="active"';}?>>Vie Etudiante</a>
                </li>
                <li class="col-md-2 lien_etudes">
                    <a href="etudes.php"<?php if($page=="etudes"){echo ' class="active"';}?>>Etudes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
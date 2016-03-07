<?php $page="logement";?>

<!DOCTYPE html>
<html lang="fr">

<?php include("_header.php"); ?>

<body id="logement" class="index">

    <?php include("_navbar.php"); ?>

    <nav class="navbar-default">
        <div class="container">
            <!-- Liens du sous menu -->
            <div id="sous_menu_logement">
                <ul class="nav">
                    <li class="col-md-2 col-md-offset-3 col-sm-4">
                        <a href="#section_residences" class="active">Résidences</a>
                    </li>
                    <li class="col-md-2 col-sm-4">
                        <a href="#section_appartements">Appartements</a>
                    </li>
                    <li class="col-md-2 col-sm-4">
                        <a href="#section_services">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="section_residences" class="bg_beige">
        <div class="container">
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="chiffres_cles col-md-2 col-sm-2">
                        <p><span class="text-bold text-couleur" style="font-size:3em">300</span>
                            <span class="text-light text-couleur" style="font-size:1.6em">places</span></p>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <p class="text-justify text-muted">La Maison des Arts et Métiers accueille la majorité des étudiants de 1ère et 2ème années (ainsi que quelques élèves de 3ème année et des doctorants). Composée de deux bâtiments, la résidence compte 150 collocations. Située à 2 minutes des salles de cours et à 500m de l'arrêt de tramway, elle est le coeur de la vie associative du campus.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="chiffres_cles col-md-2 col-sm-2">
                        <p style="line-height:8px;"><span class="text-light text-couleur" style="font-size:2.2em">270 €</span><br>
                            <span class="text-muted" style="font-size:0.6em">montant/mois/personne allocations CAF déduites</span></p>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <p class="text-justify text-muted">Le loyer pour l'année scolaire 2015-2016 s'élève à 362.55€, charges comprises. Tous les locataires sont éligibles à l'allocation logement social (ALS), d'un montant minimum de 92€.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="chiffres_cles col-md-2 col-sm-2">
                        <p><span class="text-bold text-couleur" style="font-size:2em">31 m²</span><br>
                            <span class="text-muted" style="font-size:2em">T1 Bis</span></p>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <p class="text-justify text-muted">Les appartements de type T1bis font 31m². Ils sont composés d'une pièce principale avec kitchenette, d'une salle de bain avec WC et d'une chambre pour chacun des deux colocataires.</p>
                    </div>
                </div>
            </div>
            <img src="img/logement/resid.jpg" class="col-md-5 col-xs-12">
        </div>
    </section>

    <section id="section_contact">
        <div class="container">
            <p class="text-muted text-center">Attention, aucune place n’est pré affectée aux élèves des Arts et Métiers. Il est nécessaire de remplir les formalités administratives du CROUS (<span class="text-couleur">Dossier Social Etudiant et contrat de location</span>) lors de l’inscription sur le site internet de l’école.</p>
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <p class=" text-center"><i class="fa fa-envelope-o"></i> Contact : antoine.proenca@crous-bordeaux.fr</p>
                </div>
            </div>
        </div>
    </section>

    <section id="section_appartements" class="bg_beige">
        <div class="container text-center">
            <div class="col-xs-1">
                <h3 class="titre_section text-couleur">Chambres</h3>
            </div>
            <div class="col-md-3 col-xs-11">
                <h4 class="text-center text-couleur">Exemple d'appartement type</h4>
                <img src="img/logement/plan_appart.png" class="col-xs-12">
            </div>
            <div class="col-md-8 col-xs-12 text-center">
                <div class="row">
                    <h4 class="text-couleur">Détail des équipements</h4>
                    <p class="text-muted">Les appartements sont tous équipés de la même manière.
                        <br>L’affectation à un appartement se fait le jour de l’état des lieux.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="bords_ronds">
                            <h5 class="text-couleur">Chambre</h5>
                            <p class="text-muted">1 Lit de 90cm (draps non fournis), 1 bureau et 1 armoire (armoire non déplaçable).</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bords_ronds">
                            <h5 class="text-couleur">Salle de bain</h5>
                            <p class="text-muted">1 douche, 1 WC, 1 lavabo et 1 meuble de rangement bas. Présence de 2 portants pour serviettes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="bords_ronds">
                            <h5 class="text-couleur">Pièce à vivre</h5>
                            <p class="text-muted">Kitchenette constituée de 2 plaques de cuisson électriques, 1 évier et 1 réfrigérateur, plan de travail en inox. Table type bar avec 2 tabourets hauts.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bords_ronds">
                            <h5 class="text-couleur">Connectique</h5>
                            <p class="text-muted">Wifi assuré par le service Wifirst (prix compris dans le loyer), impossible d’installer sa propre box internet. Prise TV dans la pièce à vivre.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_services">
        <div class="container">
            <div class="col-md-1 col-xs-1">
                <div class="row">
                    <h3 class="titre_section text-couleur">Services</h3>
                </div>
            </div>
            <div class="col-sm-11 col-xs-11 text-center">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/logement/laverie.png" class="logo_services">
                        <h5 class="text-couleur">Laverie</h5>
                        <p class="text-muted">(entretenue par les élèves)</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/logement/parking.png" class="logo_services">
                        <h5 class="text-couleur">Parking</h5>
                        <p class="text-muted">(plein air)</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/logement/velo.png" class="logo_services">
                        <h5 class="text-couleur">Garage à vélos</h5>
                        <p class="text-muted">(couvert)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/logement/reunion.png" class="logo_services">
                        <h5 class="text-couleur">Salles de réunion</h5>
                        <p class="text-muted"></p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/logement/biffutes.png" class="logo_services">
                        <h5 class="text-couleur">Pièces à vivre communes</h5>
                        <p class="text-muted">(en bout de couloir, habituellement aménagées en salons)</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/logement/boulodrome.png" class="logo_services">
                        <h5 class="text-couleur">Boulodrome</h5>
                        <p class="text-muted">(extérieur)</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <img src="img/logement/bar.png" class="logo_services">
                        <h5 class="text-couleur">Bar de l'école</h5>
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("_footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

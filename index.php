<?php
    $bdd = new PDO('mysql:host=localhost;dbname=aurelienallenic.fr;charset=utf8', 'root', '');
    $queryA     = $bdd->query('SELECT * FROM lettre_motivation');
    $queryE     = $bdd->query('SELECT * FROM experience');
    $queryF     = $bdd->query('SELECT * FROM formation');
    $queryCO    = $bdd->query('SELECT * FROM competence');
    $queryC     = $bdd->query('SELECT * FROM centre_interet');
    $queryL     = $bdd->query('SELECT * FROM langue');
    $langues            = $queryL->fetchAll();
    $aurelien           = $queryA->fetchAll();
    $experiences        = $queryE->fetchAll();
    $formations         = $queryF->fetchAll();
    $competences        = $queryCO->fetchAll();
    $centres_interets   = $queryC->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Autodidacte et motivé, je suis à la recherche d'un contrat en alternance suite à mon inscription en année de bachelor à l'ETNA, Ecole des Technologies Numériques Avancées" />
        <meta name="keywords" content="aurelienallenic, CV, aurelien, allenic, dev, developpeur, alternance, etna, recherche, contrat" />
        <meta name="author" content="Aurélien Allenic" />

        <title>Aurélien Allenic</title>

        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Core theme CSS-->
        <link href="style.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="/">
                <span class="d-block d-lg-none">Aurélien Allenic</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/photo_cv.jpg" alt="ma photo" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#a_propos">Aurélien</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Expériences</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#formation">formations</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#competences">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#centres_interets">Centres d'intérêts</a></li>
                </ul>
            </div>
        </nav>

        <!-- Page Content-->
        <div class="container-fluid p-0">

            <!-- A propos-->
            <section class="resume-section" id="a_propos">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Aurélien Allenic
                    </h1>
                    <div class="subheading mb-5">
                        <a href="mailto:aurelien.allenic@gmail.com">aurelien.allenic@gmail.com</a>
                    </div>
                     <p>
                        <?php 
                            echo $aurelien[0]['contenu'];
                        ?>
                    </p>
                </div>
            </section>
            <hr class="m-0" />

            <!--experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experiences</h2>
                    <?php
                        foreach ($experiences as $experience) {
                    ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $experience['titre']; ?></h3>
                            <div class="subheading mb-3"><?php echo $experience['sous_titre']; ?></div>
                            <p><?php echo $experience['contenu']; ?></p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $experience['periode']; ?></span></div>
                    </div>
                    <?php
                        }
                    ?>

                </div>
            </section>
            <hr class="m-0" />

            <!-- formation-->
            <section class="resume-section" id="formation">

                <div class="resume-section-content">
                    <h2 class="mb-5">Formations</h2>
                    <?php
                        foreach ($formations as $formation) {
                    ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $formation['titre']; ?></h3>
                            <div class="subheading mb-3"><?php echo $formation['sous_titre']; ?></div>
                            <div><?php echo $formation['contenu']; ?></div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $formation['periode']; ?></span></div>
                    </div>
                    <?php
                        }
                    ?>

                </div>
            </section>
            <hr class="m-0" />

            <!-- compétences-->
            <section class="resume-section" id="competences">
                <div class="resume-section-content">
                    <h2 class="mb-5">Compétences</h2>
                    <p>J'ai pu suivre en autodidacte des cours sur <a href="https://openclassrooms.com">openclassroom</a></p>
                    <div class="subheading mb-3">Cours suivis et en cours d'acquisition :</div>
                    <ul class="fa-ul mb-0">
                    <?php
                        foreach ($competences as $competence) {
                            echo '<li><span class="fa-li">'.$competence['icone'].'</span>'.$competence['technologie'].'</li>';
                        }
                    ?>
                    </ul>
                    <br><div class="subheading mb-3">langues :</div>
                    <ul class="fa-ul mb-0">
                     <?php
                        foreach ($langues as $langue) {
                            echo '<li><span class="fa-li">'.$langue['icone'].'</span>'.$langue['libelle'].' - '.$langue['commentaire']. '</li>';
                        }
                    ?>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Centre d'intérêts-->
            <section class="resume-section" id="centres_interets">
                <div class="resume-section-content">
                    <h2 class="mb-5">Centres d'intérêts</h2>
                    <ul class="fa-ul mb-0">
                    <?php
                        foreach ($centres_interets as $centre_interet) {
                            echo '<li><span class="fa-li">'.$centre_interet['icone'].'</span><strong>'.$centre_interet['libelle'].'</strong><br><em>'.$centre_interet['detail'].'</em></li>';
                        }
                    ?> 
                    </ul>
                </div>
            </section>
        <!-- JS placed at the end so the pages load faster -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="scripts.js"></script>

    </body>
</html>

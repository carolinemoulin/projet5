<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio de sites web">
    <meta name="author" content="Caroline Moulin">
    <link rel="icon" href="App/Public/img/favicon.ico" />
    <title>Portfolio de Caroline Moulin</title>

    <!-- Bootstrap core CSS -->
    <link href="App/Vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="App/Vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="App/Vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="App/Public/css/freelancer.min.css" rel="stylesheet">
    <link href="App/Public/css/style.css" rel="stylesheet">


    <meta property="og:image" content="https://caroline-moulin.fr/public/images/" /> <!-- TO DO -->
    <meta property="og:url" content="https://caroline-moulin.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Portfolio de Caroline Moulin" />
    <meta property="og:description" content="Portfolio de sites web" />
    <!--Vcard twitter-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Portfolio de Caroline Moulin" />
    <meta name="twitter:creator" content="Caroline Moulin" />

</head>
<body>

<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="console.php">Accueil</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1 dropdown">
                    <a data-toggle="dropdown" href="#project">Projets</a>
                    <ul class="dropdown-menu jqueryFadeIn">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=addProject">Ajout d'un projet</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=manageProjects">Edition d'un projet</a></a></li>
                    </ul>
                </li>
                <li class="nav-item mx-0 mx-lg-1 dropdown">
                    <a data-toggle="dropdown" href="#jobs">Expériences</a>
                    <ul class="dropdown-menu jqueryFadeIn">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=addJob">Ajout d'une expérience</a></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=manageJobs">Edition d'une expérience</a></a></li>
                    </ul>
                </li>
                <li class="nav-item mx-0 mx-lg-1 dropdown">
                    <a data-toggle="dropdown" href="#training">Formations</a>
                    <ul class="dropdown-menu jqueryFadeIn">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=addTraining">Ajout d'une formation</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=manageTrainings">Edition d'une formation</a></a></li>
                    </ul>
                </li>
                <li class="nav-item mx-0 mx-lg-1 dropdown">
                    <a data-toggle="dropdown" href="#skills">Compétences</a>
                    <ul class="dropdown-menu jqueryFadeIn">

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=addSkill">Ajout d'une compétence</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="console.php?action=manageSkills">Edition d'une compétence</a></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
            <?= $content ?>
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
            <p> <a href="<?php echo $_SERVER["HTTP_REFERER"] ?>">Retour à la page Précédente</a></p>
            <p><a href="console.php?action=logout">Se déconnecter</a></p>
            </div>
        </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="App/Vendor/jquery/jquery.js"></script>
<script src="App/Vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="App/Vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="App/Vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="App/Public/js/jqBootstrapValidation.js"></script>

<!-- Custom scripts for this template -->
<script src="App/Public/js/freelancer.min.js"></script>
<script src="App/Public/js/nav.js"></script>
</body>

</html>
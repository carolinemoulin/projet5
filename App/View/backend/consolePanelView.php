<?php $title = 'Page d\'administration'; ?>

<?php ob_start(); ?>
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <h1 class="text-uppercase mb-0">Gestion du site</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Ajouter, Editer ou Supprimer des objets de la page principale</h2>
        </div>
    </header>

    <section class="bg-primary text-white mb-0" id="project">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Gestion des Projets</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead"><a href="console.php?action=addProject">Ajout d'un projet</a></p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead"><a href="console.php?action=manageProjects">Editer / supprimer un projet</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-primary text-white mb-0" id="jobs">
            <div class="container">
                <h2 class="text-center text-uppercase text-white">Gestion des Expériences</h2>
                <hr class="star-light mb-5">
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="lead"><a href="console.php?action=addJob">Ajout d'une expérience</a></p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="lead"><a href="console.php?action=manageJobs">Editer / supprimer une expérience</a></p>
                    </div>
                </div>
        </div>
    </section>
    <section class="bg-primary text-white mb-0" id="training">
            <div class="container">
                <h2 class="text-center text-uppercase text-white">Gestion des Formations</h2>
                <hr class="star-light mb-5">
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="lead"><a href="console.php?action=addTraining">Ajout d'une formation</a></p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="lead"><a href="console.php?action=manageTrainings">Editer / supprimer une formation</a></p>
                    </div>
                </div>
            </div>
    </section>
    <section class="bg-primary text-white mb-0" id="skills">
            <div class="container">
                <h2 class="text-center text-uppercase text-white">Gestion des Compétences</h2>
                <hr class="star-light mb-5">
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="lead"><a href="console.php?action=addSkill">Ajout d'une compétence</a></p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="lead"><a href="console.php?action=manageSkills">Editer / supprimer une compétence</a></p>
                    </div>
                </div>
            </div>
    </section>

<?php $content = ob_get_clean(); ?>

<?php require('App/View/backend/template.php'); ?>
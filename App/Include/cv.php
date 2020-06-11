<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white">Mon parcours</h2>
        <hr class="star-light mb-5">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Avant de suivre la formation de Développeur Web Junior chez OpenClassrooms, j'ai eu l'occassion de mettre mes compétences à disposition pour plusieurs sociétés.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Vous pouvez découvrir mon parcours en le découvrant dans chaque partie ci-dessous ou téléchargeant mon CV</p>
            </div>
        </div>
        <div class="row">
            <div class="icon col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#cv-modal-1">
                    <i class="fas fa-briefcase fa-3x"></i>
                </a>
            </div>
            <div class="icon col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#cv-modal-2">
                    <i class="fas fa-user-graduate fa-3x"></i>
                </a>
            </div>
            <div class="icon col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#cv-modal-3">
                    <i class="fas fa-award fa-3x"></i>
                </a>
            </div>
        </div>
    </div>
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="App/Public/img/CV2018.pdf" download="cv">
                <i class="fas fa-download mr-2"></i>
                Télécharger
            </a>
        </div>
</section>

<!--CV Modal-->
<!--Modal Expériences-->

<div class="cv-modal mfp-hide" id="cv-modal-1">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Mes expériences</h2>
                    <hr class="star-dark mb-5">
                    <?php foreach ($jobs as $job) :?>
                        <h3 class="text-secondary text-uppercase mb-0"><?= nl2br($job['entreprise']) ?></h3>
                        <h4 class="text-secondary text-uppercase mb-0"><?= nl2br($job['position']) ?></h4>
                        <img class="img-fluid mb-5" src="<?php echo htmlspecialchars($job['logo']); ?>" >
                        <p class="mb-5"><?= nl2br($job['missions']) ?></p>
                        <p class="mb-5">Du <?= nl2br($job['dateStart_fr']) ?> au <?= nl2br($job['dateEnd_fr']) ?></p>
                        <hr class="star-dark mb-4">
                    <?php endforeach;?>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Fermer les expériences</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Modal Formation -->

<div class="cv-modal mfp-hide" id="cv-modal-2">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Mes formations</h2>
                    <hr class="star-dark mb-5">
                    <?php foreach ($trainings as $training) :?>
                        <h4 class="text-secondary text-uppercase mb-0"><?= nl2br($training['graduate']) ?></h4>
                        <p class="mb-5"><?= nl2br($training['date']) ?></p>
                        <p class="mb-5"><?= nl2br($training['institution']) ?></p>
                        <hr class="star-dark mb-4">
                    <?php endforeach;?>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Fermer les formations</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Modal Compétences -->

<div class="cv-modal mfp-hide" id="cv-modal-3">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Mes compétences</h2>
                    <hr class="star-dark mb-5">
                    <div class="row">
                        <?php foreach ($skills as $skill) :?>
                            <div class="col-lg-4 col-lg-4 col-lg-4">
                                <img class="img-fluid mb-5" src="<?php echo htmlspecialchars($skill['logo']); ?>" alt="compétences">
                                <p class="mb-5"><?= nl2br($skill['skill']) ?></p>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Fermer les compétences</a>
                </div>
            </div>
        </div>
    </div>
</div>


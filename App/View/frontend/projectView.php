<?php $title = htmlspecialchars($project['titleProject']); ?>

<?php ob_start(); ?>
    <div class="card my-4">
        <div class="container-fluid">
            <div id="container_slider">
                <div class="project">
                    <img src="<?= htmlspecialchars($project['image']) ?>">

                    <h3>
                        <?= htmlspecialchars($project['titleProject']) ?>
                    </h3>

                    <p>
                        <?= nl2br($project['description']) ?>
                    </p>
                    <p>
                        <?= nl2br($project['techno']) ?>
                    </p>
                    <p>
                        <a href="<?= nl2br($project['link']) ?>" target="_blank">Voir le site du projet</a>
                    </p>
                    <p><a href="index.php">Retour à l'accueil</a></p>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();

require('App/View/frontend/template.php'); ?>
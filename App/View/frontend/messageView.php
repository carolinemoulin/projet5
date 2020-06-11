<?php $title = 'Portfolio de Caroline MOULIN'; ?>

<?php ob_start(); ?>
    <div class="card my-4">
        <div class="card-body">
            <p>Retour à <a href="index.php">l'accueil</a></p>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
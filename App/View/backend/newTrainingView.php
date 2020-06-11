<?php $title = 'Ajout d\'une formation'; ?>

<?php ob_start(); ?>

<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Ajout d'une formation</h1>
        <hr class="star-light">
    </div>
</header>
<section id="admin">
    <div class="container">
        <form action="console.php?action=newTraining" method="post">
            <div class="form-group">
                <label>Nom de la formation</label>
                <input type="text" class="form-control" id="graduate" name="graduate" placeholder="Nom de la formation"  required>
            </div>
            <div class="form-group">
                <label>Année du diplôme</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="Année du diplôme"  required>
            </div>
            <div class="form-group">
                <label>Etablissement</label>
                <input type="text" class="form-control" id="institution" name="institution" placeholder="Etablissement">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter la formation</button>
            </div>
        </form>
    </div>
</section>
<?php
$content = ob_get_clean();

require('App/View/backend/template.php'); ?>


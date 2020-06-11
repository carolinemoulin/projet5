<?php $title = 'Ajout d\'une compétence'; ?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Ajout d'une compétence</h1>
        <hr class="star-light">
    </div>
</header>
<section id="admin">
    <div class="container">
        <form action="console.php?action=newSkill" method="post">
            <div class="form-group">
                <label>Nom de la compétence</label>
                <input type="text" class="form-control" id="skill" name="skill" placeholder="Nom de la compétence"  required>
            </div>
            <div class="form-group">
                <label>Logo de la compétence</label><br>
                <input type="text" class="form-control" id="logo" name="logo" placeholder="Emplacement du logo"  required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter la compétence</button>
            </div>
        </form>
    </div>
</section>
<?php
$content = ob_get_clean();

require('App/View/backend/template.php'); ?>


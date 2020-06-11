<?php $title = 'Page d\'administration'; ?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Ajout d'un projet</h1>
        <hr class="star-light">
    </div>
</header>
<section id="admin">
    <div class="container">
        <form action="console.php?action=newProject" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Titre du projet</label>
                <input type="text" class="form-control" id="titleProject" name="titleProject" placeholder="Titre du projet"  required>
            </div>
            <div class="form-group">
                <label>Description du projet</label><br>
                <textarea id="description" class="form-control" name="description" rows="15"></textarea>
            </div>
            <div>
                <label>Technologies</label><br>
                <input type="checkbox" name="techno" value="HTML5" id="HTML5"><label>HTML5</label>
                <input type="checkbox" name="techno" value="CSS3" id="CSS3"><label>CSS3</label>
                <input type="checkbox" name="techno" value="WordPress" id="WordPress"><label>WordPress</label>
                <input type="checkbox" name="techno" value="JavaScript" id="JavaScript"><label>JavaScript</label>
                <input type="checkbox" name="techno" value="PHP" id="PHP"><label>PHP</label>
                <input type="checkbox" name="techno" value="MySQL" id="MySQL"><label>MySQL</label>
                <input type="checkbox" name="techno" value="Bootstrap" id="Bootstrap"><label>Bootstrap</label>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="text" class="form-control" id="image" name="image" >
            </div>
            <div class="form-group">
                <label>Lien</label>
                <input type="text" class="form-control" id="link" name="link" >
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter le projet</button>
            </div>
        </form>
    </div>
</section>


<?php
$content = ob_get_clean();

require('App/View/backend/template.php'); ?>


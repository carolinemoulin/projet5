<?php $title = 'Editer un projet'; ?>


<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Ajout d'un projet</h1>
        <hr class="star-light">
    </div>
</header>
<section id="admin">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Edition d'un projet</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="console.php?action=editProject&id=<?php echo $project['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Titre</label>
                        <input type="text" class="form-control" id="titleProject" name="titleProject" placeholder="Titre du projet" value="<?php echo $project['titleProject']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Description du Projet</label><br>
                        <textarea id="description" class="form-control" name="description" rows="10"><?php echo $project['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Technologie</label><br>
                        <input type="text" class="form-control" id="techno" name="techno" placeholder="Titre du projet" value="<?php echo $project['techno']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="text" class="form-control" id="image" name="image" value="<?php echo $project['image']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Lien</label>
                        <input type="text" class="form-control" id="link" name="link" value="<?php echo $project['link']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Publier</button>

                </form>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>


<?php require('App/View/backend/template.php'); ?>

<?php $title = 'Editer une formation'; ?>


<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Ajout d'une formation</h1>
        <hr class="star-light">
    </div>
</header>
<section id="admin">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Edition d'une formation</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="console.php?action=editTraining&id=<?php echo $training['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Diplôme</label>
                        <input type="text" class="form-control" id="graduate" name="graduate" placeholder="Diplôme" value="<?php echo $training['graduate']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Année d'optention</label><br>
                        <input type="text" class="form-control" id="date" name="date" value="<?php echo $training['date']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Etablissement</label><br>
                        <textarea id="institution" class="form-control" name="institution" rows="10"><?php echo $training['institution']; ?></textarea>
                    </div>

                    <button id="postButton" type="submit" class="btn btn-primary">Publier</button>

                </form>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>


<?php require('App/View/backend/template.php'); ?>

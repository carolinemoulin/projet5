<?php $title = 'Editer une compétence'; ?>


<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Ajout d'une compétence</h1>
        <hr class="star-light">
    </div>
</header>
<section id="admin">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Edition d'une compétence</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="console.php?action=editSkill&id=<?php echo $skill['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Compétence</label>
                        <input type="text" class="form-control" id="skill" name="skill" placeholder="Compétence" value="<?php echo $skill['skill']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Logo</label><br>
                        <input type="text" class="form-control" id="logo" name="logo" value="<?php echo $skill['logo']; ?>">
                    </div>

                    <button id="postButton" type="submit" class="btn btn-primary">Publier</button>

                </form>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>


<?php require('App/View/backend/template.php'); ?>

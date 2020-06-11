<?php $title = 'Editer une expérience'; ?>

<?php ob_start(); ?>
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Ajout d'une expérience</h1>
        <hr class="star-light">
    </div>
</header>
<section id="admin">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Edition d'une expérience</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="console.php?action=editJob&id=<?php echo $job['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Entreprise</label>
                        <input type="text" class="form-control" id="entreprise" name="entreprise" placeholder="Entreprise" value="<?php echo $job['entreprise']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Logo</label><br>
                        <input type="text" class="form-control" id="logo" name="logo" value="<?php echo $job['logo']; ?>" placeholder="Emplacement de l'image">
                    </div>
                    <div class="form-group">
                        <label>Poste occupé</label><br>
                        <input type="text" class="form-control" id="position" name="position" value="<?php echo $job['position']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Missions</label><br>
                        <textarea id="missions" class="form-control" name="missions" rows="10"><?php echo $job['missions']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Date de début</label>
                        <input type="text" class="form-control" id="dateStart" name="dateStart" value="<?php echo $job['dateStart']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Date de fin</label>
                        <input type="text" class="form-control" id="dateEnd" name="dateEnd" value="<?php echo $job['dateEnd']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Publier</button>

                </form>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean(); ?>


<?php require('App/View/backend/template.php'); ?>

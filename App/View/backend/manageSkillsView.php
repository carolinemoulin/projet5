<?php $title = 'Gestion des compétences'; ?>

<?php ob_start(); ?>
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <h1 class="text-uppercase mb-0">Gestion des compétences</h1>
            <hr class="star-light">
        </div>
    </header>
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Ajouter, modifier, supprimer des compétences</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <p class="lead">
                    <table class="table-bordered table-striped table-responsive">
                        <tr>
                            <th scope="col">Compétence</th>
                            <th scope="col">Logo</th>
                        </tr>
                        <tr>
                            <?php foreach ($skills as $skill) :?>
                            <td><?php echo htmlspecialchars($skill['skill']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($skill['logo']); ?>"></td>
                            <td><a href="console.php?action=editSkillView&amp;id=<?php echo $skill['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                            <td><a href="console.php?action=deleteSkill&amp;id=<?php echo $skill['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette compétence ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
                        </tr>

                        <?php endforeach; ?>

                    </table>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();
require('App/View/backend/template.php'); ?>
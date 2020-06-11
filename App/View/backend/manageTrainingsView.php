<?php $title = 'Gestion des formations'; ?>

<?php ob_start(); ?>

    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <h1 class="text-uppercase mb-0">Gestion des formations</h1>
            <hr class="star-light">
        </div>
    </header>
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Ajouter, modifier, supprimer des formations</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <p class="lead">
                    <table class="table-bordered table-striped table-responsive">
                        <tr>
                            <th scope="col">Diplôme</th>
                            <th scope="col">Année</th>
                            <th scope="col">Etablissement</th>
                        </tr>
                        <tr>
                            <?php foreach ($trainings as $training):?>
                            <td><?php echo htmlspecialchars($training['graduate']); ?></td>
                            <td><?php echo htmlspecialchars($training['date']); ?></td>
                            <td><?php echo htmlspecialchars($training['institution']); ?></td>
                            <td><a href="console.php?action=editTrainingView&amp;id=<?php echo $training['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                            <td><a href="console.php?action=deleteTraining&amp;id=<?php echo $training['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette compétence ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
                        </tr>

                        <?php endforeach;?>

                    </table>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();
require('App/View/backend/template.php'); ?>
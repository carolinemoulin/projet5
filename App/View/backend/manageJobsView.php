<?php $title = 'Gestion des expériences'; ?>

<?php ob_start(); ?>
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <h1 class="text-uppercase mb-0">Gestion des expériences</h1>
            <hr class="star-light">
        </div>
    </header>
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Ajouter, modifier, supprimer des expériences</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <p class="lead">
                    <table class="table-bordered table-striped table-responsive">
                        <tr>
                            <th scope="col">Entreprise</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Poste occupé</th>
                            <th scope="col">Missions</th>
                            <th scope="col">Date début</th>
                            <th scope="col">Date fin</th>
                        </tr>
                        <tr>
                            <?php foreach ($jobs as $job) :?>
                            <td><?php echo htmlspecialchars($job['entreprise']); ?></td>
                            <td><img src="<?php echo htmlspecialchars($job['logo']); ?>"></td>
                            <td><?php echo htmlspecialchars($job['position']); ?></td>
                            <td><?php echo htmlspecialchars($job['missions']); ?></td>
                            <td><?php echo htmlspecialchars($job['dateStart_fr']); ?></td>
                            <td><?php echo htmlspecialchars($job['dateEnd_fr']); ?></td>
                            <td><a href="console.php?action=editJobView&amp;id=<?php echo $job['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
                            <td><a href="console.php?action=deleteJob&amp;id=<?php echo $job['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cette expérience ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
                        </tr>

                        <?php endforeach;?>

                    </table>
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php $content = ob_get_clean();
require('App/View/backend/template.php'); ?>
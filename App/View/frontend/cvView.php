<?php $title = 'Mon Parcours'; ?>

<?php ob_start(); ?>
    <div class="card my-4">
        <div class="card-body">
            <h3 class="card-header">Mes expériences</h3>
            <div class="input-group">
                <?php
                while ($data = $jobs->fetch()) {
                    ?>
                    <p><h4> <?php echo htmlspecialchars($data['entreprise']); ?></h4>
                        <?php if (!empty($data['logo'])){ ?>
                    <img src="<?php echo htmlspecialchars($data['logo']); ?>" alt="logo"></p>
                    <?php
                }else {
                    echo '';
                }
                ?>
                    <p>De <?php echo htmlspecialchars($data['dateStart_fr']); ?>
                       à <?php echo htmlspecialchars($data['dateEnd_fr']); ?></p>
                    <p><?php echo htmlspecialchars($data['missions']); ?></p>
                    <?php
                }
                $jobs->closeCursor();
                ?>
            </div>
        </div>
    </div>
    <div class="card my-4">
        <div class="card-body">
            <h3 class="card-header">Mes formations</h3>
            <div class="input-group">
                <?php
                while ($data = $trainings->fetch()) {
                    ?>
                    <p><?php echo htmlspecialchars($data['graduate']); ?>
                    <?php echo htmlspecialchars($data['date']); ?>
                    <?php echo htmlspecialchars($data['institution']); ?></p>
                    <?php
                }
                $trainings->closeCursor();
                ?>
            </div>
        </div>
    </div>
    <div class="card my-4">
        <div class="card-body">
            <h3 class="card-header">Mes compétences</h3>
            <div class="input-group">
                <div class="skills">
                    <?php
                    while ($data = $skills->fetch()) {
                        ?>
                        <p><img src="<?php echo htmlspecialchars($data['logo']); ?>"><br>
                            <?php echo htmlspecialchars($data['skill']); ?>
                            </p>
                        <?php
                    }
                    $skills->closeCursor();
                    ?>
                </div>
            </div>
        </div>
        <p><a href="index.php">Retour à l'accueil</a></p>
    </div>

<?php
$content = ob_get_clean();

require('App/View/frontend/template.php'); ?>
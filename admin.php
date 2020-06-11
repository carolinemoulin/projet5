<?php $title = 'Page de connexion à l\'administration'; ?>

<?php ob_start(); ?>
<section id="connectForm">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Connexion</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="console.php?action=admin" method="post">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Identifiant</label>
                            <input class="form-control" id="pseudo" type="text" name="userPseudo" placeholder="Identifiant" required="required" data-validation-required-message="Merci de saisir votre identifiant.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Mot de passe </label>
                            <input class="form-control" id="email" name="userPass" type="password" placeholder="Mot de passe" required="required" data-validation-required-message="Merci de saisir votre mot de passe.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" id="connectFormButton">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('App/View/frontend/template.php'); ?>


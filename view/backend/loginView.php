
<?php $title = 'Jean Forteroche, écrivain et acteur'; ?>

    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Ma machine à écrire</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                <div class="container py-5">
                       

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                        <h3>Tous vos textes en un seul endroit</h3>
                        </div>
                        <div class="card-body">
                            <form action="?action=connexion" class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Pseudo</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="pseudo" placeholder="identifiant" id="pseudo" value="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" name="password" placeholder="Mot de passe"  class="form-control form-control-lg rounded-0" id="pwd1" value="" autocomplete="new-password">
                                    <div class="invalid-feedback">Entrez votre mot de passe</div>
                                </div>
                                <div>
                                <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" name="connexion" value="connexion">Login</button>
                                <p class="credits"><a href="index.php" target="_blank">Retour au blog</a></p>
                            </form>

                        </div>
                        <!--/card-block-->
                 
                        
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->

<?php $content = ob_get_clean(); ?>

<?php require('template_login.php'); ?>

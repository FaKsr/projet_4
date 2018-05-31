<?php $title = 'Jean Forteroche, écrivain et acteur'; ?>

<section class="login-block">
    <div class="container">
	    <div class="row">
		    <div class="col-md-4 login-sec">
          <h2 class="text-center">Ma machine à écrire</h2>
          <h3>Tous vos textes en un seul endroit</h3>   

          <form action="?action=connexion" class="login-form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">

          <div class="form-group">
            <label for="pseudo" class="text-uppercase"></label>
            <input require type="text" class="form-control" name="pseudo" placeholder="Identifiant" id="pseudo" value="">
          </div>

          <div class="form-group">
            <label for="password" class="text-uppercase"></label>
            <input require type="password" name="password" id="pwd1" value="" class="form-control" placeholder="Mot de passe" autocomplete="new-password">
          </div>

          <div class="form-check">
          <a class="credits" href="index.php" target="_blank">Retour au blog</a>
          <button type="submit" class="btn btn-login float-right">Se connecter</button></div>
         </form>

          </div>

		<div class="col-md-8 banner-sec">

      <img class="d-block img-fluid" src="./public/images/vintage.jpg" alt="carte vintage">
     
		</div>
	</div>
</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template_login.php'); ?>
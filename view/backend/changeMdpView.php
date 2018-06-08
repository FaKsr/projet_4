<?php
ob_start();
$title = "Paramètre";
?>

<!-- Encart Titre -->
<div class="jumbotron jumbotron-fluid">
  <div class="titleAdmin" class="container">
    <h1 class="display-5">Modifier votre mot de passe</h1>
    <p class="lead">Modifier vos chapitres, supprimez les et retrouvez les commentaires de vos lecteurs.</p>
  </div>
</div>

<!-- Formulaire mdp -->
<form action="?action=switchMpd" method="post">
    <div class="form-group">
        <input type="password" class="form-control" name="actualMPD" placeholder="Ancien mot de passe">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="mpd" placeholder="Nouveau mot de passe">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="mpdConfirm" placeholder="Confirmer nouveau mot de passe">
    </div>
        <input type="submit" id="bouton" name="Envoyer" value="changer votre mot de passe" class="btn btn-warning">
</form>

<?php
$content = ob_get_clean();
?>

<?php
require('template_back.php');
?>
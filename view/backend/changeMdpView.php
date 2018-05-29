<?php $title = 'changement de mot de passe'; ?>

<?php ob_start(); ?>
<div class="row">
    <div class="col-10">
        <h2>changement de mot de passe</h2>
        <p><?php echo ($messageError); ?></p>

<form id="formulaire" action="?action=switchMpd" method="post" >
    <div class="form-group">
        <label>Ancien mot de passe</label>
        <input type="password" class="formM" class="form-control" name="actualMPD"/>
    </div>
    <div class="form-group">
        <label>Nouveau mot de passe</label>
        <input type="password" class="formM" class="form-control" name="mpd"/>
    </div>
    <div class="form-group">
        <label>Confirmer nouveau mot de passe</label>
        <input type="password" class="formM" class="form-control" name="mpdConfirm"/>
    </div>
        <input type="submit" id="bouton" name="Envoyer" value="changer votre mot de passe" class="btn btn-warning"/>

</form>
</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>

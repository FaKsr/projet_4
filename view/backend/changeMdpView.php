<?php $title = 'changement de mot de passe'; ?>

<?php ob_start(); ?>
<h2>changement de mot de passe</h2>
<p><?php echo ($messageError); ?></p>
<form id="formulaire" action="?action=switchMpd" method="post" >
    <p>Ancien mot de passe</p>
    <input type="password" class="formu" name="actualMPD" placeholder="Ancien mot de passe"/>
    <p>Nouveau mot de passe</p>
    <input type="password" class="formu" name="mpd" placeholder="Nouveau mot de passe"/>
    <p>Confirmer nouveau mot de passe</p>
    <input type="password" class="formu" name="mpdConfirm" placeholder="Confirmation"/>
    </br>
    <input type="submit" id="bouton" name="Envoyer" value="changer" class="btn btn-warning"/>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>
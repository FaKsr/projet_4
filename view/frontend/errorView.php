<?php $title = 'Jean Forteroche, écrivain et auteur'; ?>

<?php ob_start(); ?>
<h1>Un billet simple pour l'Alaska</h1>
<p>Derniers chapitres du blog :</p>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
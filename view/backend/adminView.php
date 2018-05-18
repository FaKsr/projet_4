<title>Tableau de bord de Jean Forteroche</title>

<?php ob_start(); ?>
<h1>Bonjour Jean Forteroche !</h1>
<p>Bienvenue sur votre tableau de bord</p>

<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>
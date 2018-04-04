<?php $title = 'Jean Forteroche, écrivain et acteur'; ?>

<?php ob_start(); ?>
<h1>Un billet simple pour l'Alaska</h1>

<?php
//Attribution des variables de session
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
?>
  
<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>
<title>Tableau de bord de Jean Forteroche</title>

<?php ob_start(); ?>

<!-- Encart Titre -->
<div class="jumbotron">
  <h1 class="display-4">Bonjour Jean Forteroche !</h1>
  <p class="lead">Bienvenue sur votre tableau de bord.</p>
  <hr class="my-4">
  <p id="infoTabl">Dans votre espace, vous pouvez écrire, modifier et supprimer un épisode. Il vous est possible de voir les commentaires de chaque chapitre et de supprimer les commentaires qui ont été reportés par vos lecteurs.<br /><br />Bonne écriture.</p>
  <p class="lead">
    <a class="btn btn-info btn-lg" href="admin.php?action=edit" role="button">Ecrire</a>
    <a class="btn btn-info btn-lg" href="admin.php?action=listPosts" role="button">Chapitres</a>
  </p>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>
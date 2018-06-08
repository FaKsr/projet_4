<?php
ob_start();
$title = "Accueil";
?>

<!-- Encart Titre -->
<div class="jumbotron">
  <div class="titleAdmin">
    <h1 class="display-5">Bonjour Jean Forteroche !</h1>
    <p class="lead">Bienvenue sur votre tableau de bord.</p>
    <hr class="my-4">
    <p id="infoTabl">Dans votre espace, vous pouvez écrire, modifier et supprimer un épisode. Il vous est possible de voir les commentaires de chaque chapitre et de supprimer les commentaires qui ont été signalés par vos lecteurs.</p>
  </div>  
</div>

<?php
$content = ob_get_clean();
?>

<?php
require('template_back.php');
?> 
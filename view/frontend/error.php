<?php
ob_start();
$title = "Erreur";
?>

<!-- Page error -->
<div class="site-wrapper">
      <h1>Un billet simple pour l'Alaska</h1>
      <p class="lead"><?= $errorMessage ?></p>
    </div>

<?php
$content = ob_get_clean();
?>

<?php
require('template.php');
?> 
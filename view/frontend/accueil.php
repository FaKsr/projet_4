<?php
ob_start();
$title = "Accueil du blog";
?>

<!-- Accueil blog -->
<div class="site-wrapper">
    <div class="inner cover"><img id="imgAccueil" src="./public/images/fondAccueil.jpg" alt="alaska"/>
      <h1 id="alaska" class="lead">Un billet simple pour l'Alaska</h1>
      <p class="lead">Duis semper mauris non justo ullamcorper laoreet. Etiam ornare scelerisque rhoncus. Praesent vitae non justo ullamcorper vulputate ligula. Fusce vulputate, odio nec cursus semper, nibh velit finibus nisi, ullamcorper aliquam purus ligula non leo. Duis semper mauris velit finibus non justo ullamcorper laoreet. Fusce vulputate, odio nec cursus semper.</p>
    </div>
</div>

<?php
$content = ob_get_clean();
?>

<?php
require('template.php');
?> 
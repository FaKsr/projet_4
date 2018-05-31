<title>Accueil du blog</title> 

<?php ob_start(); ?>

<!-- Accueil blog -->
<div class="site-wrapper">
    <div class="inner cover"><img id="imgAccueil" src="./public/images/fondAccueil.jpg" alt="alaska"/>
      <p id="alaska" class="lead">Un billet simple pour l'Alaska</p>
      <p class="lead">Duis semper mauris non justo ullamcorper laoreet. Etiam ornare scelerisque rhoncus. Praesent vitae vulputate ligula. Fusce vulputate, odio nec cursus semper, nibh velit finibus nisi, ullamcorper aliquam purus ligula non leo.</p>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
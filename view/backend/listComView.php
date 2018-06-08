<?php
ob_start();
?>

        <!-- Encart Titre du Chapitre -->
<div class="jumbotron jumbotron-fluid">
  <div class="titleAdmin" class="container">
    <h1 class="display-5"><?= htmlspecialchars($post['numero']) ?>-
        <?= htmlspecialchars($post['title']) ?></h1>
    <p class="lead">le <?= htmlspecialchars($post['creation_date_fr']) ?></p>
  </div>
</div>

<!-- Commentaires signales -->
<div class="table-responsive-sm pb-2">
<table class="table  table-hover">
<thead class="thead-dark">
    <tr>
    <th>Auteur</th>
    <th>Date</th>
    <th>Commentaires signalés</th>
    <th>Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <?php
while ($signale = $signales->fetch()) {
?>
   <tr>
    <td>
    <strong><?= htmlspecialchars($signale['author']) ?></strong>
    </td>
    <td>
    le <?= htmlspecialchars($signale['comment_date_fr']) ?>
   </td>
    <td class="align-middle">
    <?= htmlspecialchars($signale['comment']) ?>
   </td>
    <td align="center">
    <a href="admin.php?action=deleteCom&amp;id=<?= $signale['id'] ?>&postId=<?= $post['id'] ?>"><img class="dash"  src="./public/images/delete-2x.png" alt="suppression commentaire"></a>
    </td>
    </tr>
<?php
}
$signales->closeCursor();
?>  
</tbody>
</table>
</div>

<!-- Tous les commentaires -->
<div class="table-responsive-sm pb-2">
<table class="table table-light table-hover">
    <thead class="thead-light">
    <tr>
    <th>Auteur</th>
    <th>Date</th>
    <th>Commentaires</th>
    </tr>
    </thead>
    <tbody>

    <?php
while ($comment = $comments->fetch()) {
?>

    <tr>
    <td>
    <strong><?= htmlspecialchars($comment['author']) ?>
   </td>
    <td>
    le </strong> le <?= $comment['comment_date_fr'] ?> 
    </td>
    <td>
    <?= htmlspecialchars($comment['comment']) ?>
   </td>
    </tr>

<?php
}
$comments->closeCursor();
?>  

</tbody>
</table>
</div>

<?php
$content = ob_get_clean();
?>

<?php
require('template_back.php');
?>
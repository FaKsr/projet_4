<?php
ob_start();
$title = "Les Chapitres";
?>

<!-- Encart Titre -->
<div class="jumbotron jumbotron-fluid">
  <div class="titleAdmin" class="container">
    <h1 class="display-5">Chapitres</h1>
    <p class="lead">Modifier vos chapitres, supprimez les et retrouvez les commentaires de vos lecteurs.</p>
  </div>
</div>

<!-- Tableau Gerer les chapitres -->
<div class="table-responsive-sm">
<table class="table table-light table-hover">
    <thead class="thead-light">
    <tr>
    <th>Episodes</th>
    <th>Publiés</th>
    <th>Modifiés</th>
    <th>Supprimés</th>
    <th>Commentaires</th>
    </tr>
    </thead>
    <tbody>
    <?php
while ($data = $posts->fetch()) {
?>
   <tr>
    <td>
    <?= htmlspecialchars($data['numero']) ?> - <?= htmlspecialchars($data['title']) ?>
   </td>
    <td>
    le <?= htmlspecialchars($data['creation_date_fr']) ?>
   </td>
    <td align="center" class="align-middle">
    <a href="admin.php?action=modifierPost&amp;id=<?= $data['id'] ?>"><img class="center-block" class="dash" src="./public/images/pencil-2x.png" alt="modification"></a>
    </td>
    <td align="center" class="align-middle">
    <a href="admin.php?action=deletePost&amp;id=<?= $data['id'] ?>"><img class="dash"  src="./public/images/delete-2x.png" alt="suppression"></a>
    </td>
    <td align="center" class="align-middle">
    <a href="admin.php?action=comPost&amp;id=<?= $data['id'] ?>"><img class="dash"  src="./public/images//list-2x.png" alt="commentaires"></a>
    </td>
    </tr>

<?php
}
$posts->closeCursor();
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
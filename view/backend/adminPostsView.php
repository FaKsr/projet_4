<title>Tableau de bord de Jean Forteroche</title>

<?php ob_start(); ?>

<!-- Encart Titre -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Tableau de bord des Chapitres</h1>
    <p class="lead">Modifiés vos épisodes, supprimés les et retrouvez les commentaires de vos lecteurs.</p>
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
    <td class="align-middle">
    <a href="admin.php?action=modifierPost&amp;id=<?= $data['id'] ?>"><img class="center-block" class="dash" src="./open-iconic/png/pencil-2x.png" alt="modification"></a>
    </td>
    <td class="align-middle">
    <a href="admin.php?action=deletePost&amp;id=<?= $data['id'] ?>"><img class="dash"  src="./open-iconic/png/delete-2x.png" alt="suppression"></a>
    </td>
    <td class="align-middle">
    <a href="admin.php?action=comPost&amp;id=<?= $data['id'] ?>"><img class="dash"  src="./open-iconic/png/list-2x.png" alt="commentaires"></a>
    </td>
    </tr>

<?php
}
$posts->closeCursor();
?>   

</tbody>
</table>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?> 
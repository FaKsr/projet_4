<title>Tableau de bord de Jean Forteroche</title>

<?php ob_start(); ?>
<h1>Bonjour Jean Forteroche !</h1>

<?php
while ($data = $posts->fetch())
{
?>
<div class="table-responsive-lg">
<table class="table table-secondary table-hover">
    <thead>
    <tr>
    <th>Episodes</th>
    <th>Publiés</th>
    <th>Modifiés</th>
    <th>Supprimés</th>
    <th>Commentaires</th>
    </tr>
    </thead>
    </thead>
    <tbody>
    <tr>
    <td>
    <?= htmlspecialchars($data['numero']) ?> - <?= htmlspecialchars($data['title']) ?>
    </td>
    <td>
    le <?= htmlspecialchars($data['creation_date_fr']) ?>
    </td>
    <td class="align-middle">
    <a href="admin.php?action=updatePost&amp;id=<?= $data['id'] ?>"><img class="center-block" class="dash" src="./open-iconic/png/pencil-2x.png" alt="delete"></a>
    </td>
    <td class="align-middle">
    <a href="admin.php?action=deletePost&amp;id=<?= $data['id'] ?>"><img class="dash"  src="./open-iconic/png/delete-2x.png" alt="delete"></a>
    </td>
    <td class="align-middle">
    <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">gérer les commentaires</a>
    </td>
    </tr>
    </tbody>
</table>
</div>

<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>
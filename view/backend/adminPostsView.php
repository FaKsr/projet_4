<title>Tableau de bord de Jean Forteroche</title>

<?php ob_start(); ?>
<h1>Tableau de bord des Episodes</h1>

<div class="table-responsive-sm pb-2">
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
    <tbody>
    <?php
while ($data = $posts->fetch())
{
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
    <a href="admin.php?action=deletePost&amp;id=<?= $data['id'] ?>"><img class="dash"  src="./open-iconic/png/delete-2x.png" alt="suprression"></a>
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
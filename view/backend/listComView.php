<title>Tableau de bord de Jean Forteroche</title>

<?php ob_start(); ?>
<h1>Tableau de bord des commentaires</h1>

<div class="news">
    <h3>
        <?= htmlspecialchars($post['numero']) ?>-
        <?= htmlspecialchars($post['title']) ?>  
        <em>le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
    </h3>
</div>

<h2>Tous les commentaires signalés plus de 3 fois</h2>
<?php
while ($signale = $signales->fetch())
{
?>
    <p><strong><?= htmlspecialchars($signale['author']) ?></strong> le <?= $signale['comment_date_fr'] ?> 
    <a href="admin.php?action=deleteCom&amp;id=<?=$signale['id']?>&postId=<?= $post['id'] ?>">supprimer</a></p>
    <p><?= htmlspecialchars($signale['comment']) ?></p>
    
<?php
}
?>

<h2>Tous les commentaires</h2>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?> 
    <p><?= htmlspecialchars($comment['comment']) ?></p>
    
<?php
}
?>



<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>

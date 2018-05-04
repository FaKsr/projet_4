<?php $title = 'Jean Forteroche, écrivain et acteur'; ?>

<?php ob_start(); ?>
<h1>Un billet simple pour l'Alaska</h1>

<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['numero']) ?> -
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= htmlspecialchars($data['creation_date_fr']) ?></em>
            </br>
            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Lire la suite</a>
        </h3>
    </div>

<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
<title>Liste des épisodes d'un billet simple pour l'Alaska</title>

<?php ob_start(); ?>

<!-- Listing des chapitres -->
<h1>Un billet simple pour l'Alaska</h1>

<?php
while ($data = $posts->fetch()) {
    ?>

    <div class="news">
        <h3>
            Episode <?= htmlspecialchars($data['numero']) ?> -
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
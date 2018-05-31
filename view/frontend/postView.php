<title>Les épisodes d'un Billet simple pour l'Alaska</title> 

<?php ob_start(); ?>

<!-- Titre du Chapitre -->
<div class="containter">
    <h1>Un billet simple pour l'Alaska</h1>
    <div class="news">
        <h3>
        <?= htmlspecialchars($post['numero']) ?>-
        <?= htmlspecialchars($post['title']) ?>  
        <em>le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
        </h3>

    <!-- Content du Chapitre -->
    <div class="">
        <?= $post['content'] ?>
    </div>

        <!-- Lien vers la liste des chapitres -->
        <p>
        <a href="index.php?action=listPosts">Retour à la liste des chapitres</a>
        </p>
    </div>

<!-- Commentaires -->
<div class="row">
<div class="col-3">
<i> Laissez vos commentaires</i>

    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div class="form-group">
            <input type="text" class="form-control" id="author" name="author" placeholder="Auteur">
        </div>

        <div class="form-group">
            <textarea id="comment" name="comment" class="form-control" placeholder="Votre commentaire"></textarea>
        </div>
            <button type="submit" class="btn btn-login float-left">Envoyer</button>
    </form>
</div>
</div>
<!-- Affichage des commentaires -->
<?php
while ($comment = $comments->fetch()) {
    ?>
<div class="row">
<div class="card">
    <div class="card-header bg-info">
        <strong><?= htmlspecialchars($comment['author']) ?></strong>
    </div>
    <div class="card-body">
        <p class="card-text">le <?= $comment['comment_date_fr'] ?> </p>
        <p class="card-text"><?= htmlspecialchars($comment['comment']) ?></p>
        <a href="index.php?action=signaler&amp;id=<?=$comment['id']?>&postId=<?= $post['id'] ?>">signaler ce commentaire</a>
    </div>
</div>
</div>
    
<?php
}
?>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

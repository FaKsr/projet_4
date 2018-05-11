<title>Les épisodes d'un Billet simple pour l'Alaska</title> 

<?php ob_start(); ?>
<h1>Un billet simple pour l'Alaska</h1>

<div class="news">
    <h3>
        <?= htmlspecialchars($post['numero']) ?>-
        <?= htmlspecialchars($post['title']) ?>  
        <em>le <?= htmlspecialchars($post['creation_date_fr']) ?></em>
    </h3>
    
    <p>
        <?= $post['content'] ?>
    </p>
</div>

<a href="index.php?action=listPosts">Retour à la liste des billets</a>

<h2>Commentaires</h2>

    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div>
            <label for="author">Auteur</label>
            <br />
            <input type="text" id="author" name="author" />
        </div>

        <div>
            <label for="comment">Votre commentaire</label>
            <br />
            <textarea id="comment" name="comment"></textarea>
        </div>

        <div>
            <input type="submit" />
        </div>
    </form>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?> <a href="index.php?action=signaler&amp;id=<?=$comment['id']?>&postId=<?= $post['id'] ?>">signaler</a></p>
    <p><?= htmlspecialchars($comment['comment']) ?></p>
    
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

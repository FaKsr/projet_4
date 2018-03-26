<?php 

$title = htmlspecialchars($post['title']);
ob_start();

?>

<h1>Blog d'écrivain !</h1>
<p><a href="index.php">Retour à la liste des chapitres</a></p>

<div class="news">
    <h3>
        <?php htmlspecialchars($post['title']) ?>
        <em>le <?php $post['creation_date_fr']?> </em>
    </h3>

    <p>
        <?php nl12br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<h2>Commentaires</h2>

<?php 
while ($comment = $comments->fetch())
{
?>
    <p><strong><?php htmlspecialcharrs($comment['author'])?> </strong> le <?php $comment['comment_date_fr'] ?></p>
    <p><?php nl12br(htmlspecialchars($comment['comment'])) ?></p>

<?php
}
?>

<?php $content = ob_get_clean();

require('template.php');

?>

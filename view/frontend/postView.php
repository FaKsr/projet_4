
<?php
ob_start();
$title = "Episode d'un Billet simple pour l'Alaska";
?>

<!-- Titre du Chapitre -->
<h1>Un billet simple pour l'Alaska</h1>

<div class="row">
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
</div>

<!-- Commentaires -->
<div class="news">
    <h4> Laissez vos commentaires</h4>    
    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div class="col-md-10">
        <div class="panel panel-info">
            <input type="text" class="form-control" id="author" name="author" placeholder="Auteur">
        <div class="panel-body">
            <textarea id="comment" name="comment" placeholder="Ecrivez votre commentaire !" class="form-control"></textarea>
            <button class="btn btn-primary pull-right" type="submit">Envoyer</button>

  </div>
        </div>
        </div>

    </form>
      
</div>
<br>
<br />
<!-- Affichage des commentaires -->
  <div class="d-flex flex-wrap align-content-start">
<?php
while ($comment = $comments->fetch()) {
?>
 
         <div class="media comment-box mr-auto">
            <div class="media-body">
                <h4 class="media-heading"><?= htmlspecialchars($comment['author']) ?></h4>
                <p><?= htmlspecialchars($comment['comment_date_fr']) ?></p> 
                <p class="commentP"><?= htmlspecialchars($comment['comment']) ?><br /><a href="index.php?action=signaler&amp;id=<?= $comment['id'] ?>&postId=<?= $post['id'] ?>">signaler</a></p>
              </div>

       </div>
        
        <?php
}
?> 

      
</div>

<?php
$content = ob_get_clean();
?>

<?php
require('template.php');
?>
<?php $title = 'Jean Forteroche, écrivain et auteur'; ?>

<?php ob_start(); ?>
<h1>Un billet simple pour l'Alaska</h1>

<?php
//Attribution des variables de session
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
?>

<p>Derniers chapitres du blog :</p>

  
  <main role="main" class="container">
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            
            <div class="container">
            <h2>Bonjour Jean Forteroche !</h2>
            <p>blablalbalalalblalalblalblalblalbalblalalblalblalbla</p>            
            <table class="table table-dark table-hover">
            <thead>
            <tr>
            <th>Chapitres</th>
            <th>Modification</th>
            <th>Suppression</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td>Chapitre 1</td>
            <td>#</td>
            <td>#</td>
            </tr>
            <tr>
            <td>Chapitre 2</td>
            <td>#</td>
            <td>#</td>
            </tr>
            <tr>
            <td>Chapitre 3</td>
            <td>#</td>
            <td>#</td>
            </tr>
        </tbody>
    </table>
</div>
            
        </div>
        </div>
    </main>

<?php
while ($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />
            <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>
<?php

$title = 'Mon blog d\'écrivain';
ob_start();

?>

<h1>Blog de Jean Forteroche</h1>
<p>Derniers chapitres du blog: </p>

<?php
while($data = $posts->fetch())
{
?>
    <div class="news">
        <h3>
            <?php
            htmlspecialchars($data['title']) ?>
            <em>le <?php $data['creation_date_fr']?></em>
        </h3>

        <p>
            <?php nl12br(htmlspecialchars($data['content']))?>
            <br />
            <em><a href="index.php?action=post&amp;id<?php $data['id']?>">Commentaires</a></em>
        </p>
    </div>
<?php
}
$posts->closeCursor();
?>

<?php 
$content = ob_get_clean(); 

require('template.php');

?>
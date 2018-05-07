<title>Tableau de bord de Jean Forteroche</title>

<?php ob_start(); ?>
<h1>Bonjour Jean Forteroche !</h1>

            
    <table class="table table-secondary table-hover">
    <thead>
    <tr>
    <th>Chapitres</th>
    <th>Publiés</th>
    <th>Modifiés</th>
    <th>Supprimés</th>
    <th>Commentaires</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Chapitre 1</td>
    <td>titre 1</td>
    <td><a href="admin.php?action=updatePost"><img class="dash" src="./open-iconic/png/pencil-2x.png" alt="delete"></a></td>
    <td><a href="admin.php?action=deletePost"><img class="dash"  src="./open-iconic/png/delete-2x.png" alt="delete"></a></td>
    <td>com</td>
    </tr>
    <tr>
    <td>Chapitre 2</td>
    <td>titre chap 2</td>
    <td><a href="admin.php?action=updatePost"><img class="dash" src="./open-iconic/png/pencil-2x.png" alt="delete"></a></td>
    <td><a href="admin.php?action=deletePost"><img class="dash"  src="./open-iconic/png/delete-2x.png" alt="delete"></a></td>
    <td>com</td>
    </tr>
    <tr>
    <td>Chapitre 3</td>
    <td>titre chap 3</td>
    <td><a href="admin.php?action=updatePost"><img class="dash" src="./open-iconic/png/pencil-2x.png" alt="delete"></a></td>
    <td><a href="admin.php?action=deletePost"><img class="dash"  src="./open-iconic/png/delete-2x.png" alt="delete"></a></td>
    <td>com</td>
    </tr>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>
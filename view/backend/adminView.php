<?php $title = 'Jean Forteroche, écrivain et acteur'; ?>

<?php ob_start(); ?>
<h1>Bonjour Jean Forteroche !</h1>

    <p>Dernier chapitre</p>            
    <table class="table table-dark table-hover">
    <thead>
    <tr>
    <th>Chapitres</th>
    <th>En attente de publication</th>
    <th>Modification</th>
    <th>Suppression</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Chapitre 1</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    </tr>
    <tr>
    <td>Chapitre 2</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    </tr>
    <tr>
    <td>Chapitre 3</td>
    <td>#</td>
    <td>#</td>
    <td>#</td>
    </tr>
    </tbody>
</table>

<p>Dernier commentaire</p>

<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>
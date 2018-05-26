
<title>Editer un épisode</title>

<?php ob_start(); ?>

<head>
    <script type="text/javascript" src="./public/js/tinymce/tinymce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                mode : "textareas",
                theme : "modern",
                language : "fr_FR"    
                });
        </script>
</head>

<?php
if ($_GET['action'] == 'modifierPost'){
?>
    <form action="admin.php?action=updatePost&id=<?= $_GET['id'] ?>" method="post" name="formulaire" id="formulaire">
            <label for="title"></label>
            <input required type="text" id="title_ep" name="title" placeholder="Titre de le l'épisode" value="<?= $post['title'] ?>">
            </br>
            <label for="id_ep"></label>
            <input required type="number" id="id_ep" name="id_ep" min="1" max="1000" placeholder="Numéro de l'épisode" value="<?= $post['numero'] ?>">
            <label for="texte"></label>
            <textarea id="texte" name="texte" style="with: 60%;" rows="15"><?= $post['content'] ?></textarea>
            <input title="Modification de votre billet" name="send" type="submit" value="Modifier un épisode" id="butForm" class="btn btn-warning"/>
            </form>
<?php }
    else{ ?>

    <form action="admin.php?action=createPost" method="post" name="formulaire" id="formulaire">
    <label for="title"></label>
    <input required type="text" id="title_ep" name="title" placeholder="Titre de le l'épisode" value="">
    </br>
    <label for="id_ep"></label>
    <input required type="number" id="id_ep" name="id_ep" min="1" max="1000"  placeholder="Numéro de l'épisode" value="">
    <label for="texte"></label>
    <textarea id="texte" name="texte" style="with: 60%;" rows="15"></textarea>
    <input title="Confirmation d'un nouveau billet" name="send" type="submit" value="Créer un épisode" id="butForm" class="btn btn-primary"/>
    </form>
<?php }
?>



<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>



  
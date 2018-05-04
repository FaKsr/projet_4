
<?php $title = 'Jean Forteroche, écrivain et acteur'; ?>

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

<form action="admin.php?action=createPost" method="post" name="formulaire" id="formulaire">
            <label for="title"></label>
            <input required type="text" id="title_ep" name="title" placeholder="Titre de le l'épisode">
            </br>
            <label for="id_ep"></label>
            <input type="number" id="id_ep" name="id_ep" min="1" max="1000" required placeholder="Numéro de l'épisode">
            <label for="texte"></label>
            <textarea id="texte" name="texte" style="with: 60%;" rows="15" ></textarea>
            <input title="Créer un nouveau billet" name="send" type="submit" value="Envoyer" id="butForm" class="btn btn-primary"/></form>


<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>



  

<?php $title = 'Jean Forteroche, écrivain et acteur'; ?>

<?php ob_start(); ?>

<head>
    <script type="text/javascript" src="./1-tinyMCE-simple/tinymce/tinymce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
                mode : "textareas",
                theme : "modern"         
                });
        </script>
</head>

<form action="editPostView.php" method="post" name="formulaire" id="formulaire">
            <label for="texte"></label>
            <textarea id="texte" name="texte" style="with: 60%;" rows="15"></textarea>
              <!-- $contenu = $_POST[‘texte’] ; ?>  -->
            <input name="send" type="submit" value="Envoyer" id="butForm" class="btn btn-primary"/>
</form>


<?php $content = ob_get_clean(); ?>

<?php require('template_back.php'); ?>



  
<?php

// On charge le controller, pour que les fonctions soient en mémoire
require('controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception(' Aucun identifiant de billet envoyé'); //stop le bloc try pour aller directement au catch
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception( 'Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception(' Aucun identifiant de billet envoyé');
            }
        }
    } else {
        listPosts();
    }
}
//récupère le message d'erreur transmis et affiche le message
catch(Exception $e)
{
    $errormessage = $e->getMessage();
    require('view/errorView.php');
}

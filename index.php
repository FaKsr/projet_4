<?php

// On charge le controller, pour que les fonctions soient en mémoire
require_once('controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        // action aller a accueil
        if ($_GET['action'] == 'accueil') {
            showAccueil();
        }
        // action liste post
        elseif ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        // action post
            elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                throw new Exception(' Aucun identifiant de billet envoyé !');
            }
        } // fin de elseif post
            
        // action ajouter comment
            elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                //contrôle de saisie des champs
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $author  = htmlspecialchars($_POST['author']);
                    $comment = htmlspecialchars($_POST['comment']);
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception(' Aucun identifiant de billet envoyé !');
            }
        } // fin de eslseif addComment
            
        // action signale un comment
            elseif ($_GET['action'] == 'signaler') {
            reportComment($_GET['id'], $_GET['postId']);
        }
        // action page story
            elseif ($_GET['action'] == 'tell') {
            tellStory();
        } else {
            //si action inconnu
            throw new Exception(' Une erreur est survenue !');
        }
    } // fin de if action
    else {
        showAccueil();
    }
} // fin de try

//récupère le message d'erreur transmis et affiche le message
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/error.php');
}
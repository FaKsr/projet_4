<?php
// fonction propre à PHP servira à maintenir la $_SESSION
session_start();

// On charge le controller, pour que les fonctions soient en mémoire
require_once('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } else {
                //stop le bloc try pour aller directement au catch
                throw new Exception(' Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                //contrôle de saisie des champs
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                throw new Exception(' Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'login') {
            login();
        } elseif ($_GET['action'] == 'connexion') {
            connect();
        }
        elseif ($_GET['action'] == 'switchMpd') {
            changeMdp(); 
        }
        elseif($_GET['action'] == 'deconnexion') {
            deconnect();
        }
    } // fin de if $_GET action
    else {
        listPosts();
    }
} //fin de try

//récupère le message d'erreur transmis et affiche le message
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require_once('view/backend/errorView.php');
}

<?php
// fonction propre à PHP servira à maintenir la $_SESSION
session_start();

// On charge le controller, pour que les fonctions soient en mémoire
require_once('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'connexion') {
            connect();
        }
        if (isset($_SESSION['admin']) and $_SESSION['admin']) {
            if ($_GET['action'] == 'listPosts') {
                listEpisods();
            } elseif ($_GET['action'] == 'post') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    episod();
                } else {
                    throw new Exception(' Aucun identifiant de billet envoyé');
                }
            } elseif ($_GET['action'] == 'login') {
                login();
            } elseif ($_GET['action'] == 'switchMpd') {
                changeMdp();
            } elseif ($_GET['action'] == 'deconnexion') {
                deconnect();
            } elseif ($_GET['action'] == 'edit') {
                editPost();
            } elseif ($_GET['action'] == 'createPost') {
                $title = $_POST['title'];
                $texte = $_POST['texte'];
                $id_ep = $_POST['id_ep'];

                if (!empty($title) && !empty($texte) && !empty($id_ep)) {
                    createPost($title, $texte, $id_ep);
                } else {
                    throw new Exception('Erreur');
                }
            } elseif ($_GET['action'] == 'deletePost') {
                deletePost($_GET['id']);
            } elseif ($_GET['action'] == 'modifierPost') {
                episod();
            } elseif ($_GET['action'] == 'updatePost') {
                $title = $_POST['title'];
                $texte = $_POST['texte'];
                $id_ep = $_POST['id_ep'];
                $id = $_GET['id'];

                updatePost($title, $texte, $id_ep, $id);
            } elseif ($_GET['action'] == 'comPost') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    listCom();
                }
            } elseif ($_GET['action'] == 'deleteCom') {
                deleteComSign($_GET['id'], $_GET['postId']);
            }
        } // fin de if $_SESSION
        else {
            login();
        }
    } // fin de if $_GET action
    else {
        require 'view/frontend/accueil.php';
    }
} //fin de try

//récupère le message d'erreur transmis et affiche le message
catch (Exception $e) {
    $errorMessage = $e->getMessage();
}

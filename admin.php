<?php
// fonction propre à PHP servira à maintenir la $_SESSION
session_start();

// On charge le controller, pour que les fonctions soient en mémoire
require_once('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        // action connexion
        if ($_GET['action'] == 'login') {
            login();
        } elseif ($_GET['action'] == 'connexion') {
            connect();
        }
        // Session admin
            elseif (isset($_SESSION['admin']) and $_SESSION['admin']) {
            // action liste posts
            if ($_GET['action'] == 'listPosts') {
                listEpisods();
                // post
            } elseif ($_GET['action'] == 'post') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    episod();
                } else {
                    throw new Exception(' Aucun identifiant de billet envoyé');
                }
            } // fin de elseif post
                
            // action changer de mot de passe
                elseif ($_GET['action'] == 'switch') {
                changeP();
            }
            // action changer de mot de passe
                elseif ($_GET['action'] == 'switchMpd') {
                changeMdp();
            }
            // action deconnexion
                elseif ($_GET['action'] == 'deconnexion') {
                deconnect();
            }
            // action editer
                elseif ($_GET['action'] == 'edit') {
                editPost();
            }
            // action create
                elseif ($_GET['action'] == 'createPost') {
                $title = $_POST['title'];
                $texte = $_POST['texte'];
                $id_ep = $_POST['id_ep'];
                
                if (!empty($title) && !empty($texte) && !empty($id_ep)) {
                    createPost($title, $texte, $id_ep);
                } else {
                    throw new Exception(' Une erreur est survenue !');
                }
            } // fin de elseif createPost 
                
            // action supprimer post
                elseif ($_GET['action'] == 'deletePost') {
                deletePost($_GET['id']);
            }
            // action aller a la modification post
                elseif ($_GET['action'] == 'modifierPost') {
                episod();
            }
            // action modifier post
                elseif ($_GET['action'] == 'updatePost') {
                $title = $_POST['title'];
                $texte = $_POST['texte'];
                $id_ep = $_POST['id_ep'];
                $id    = $_GET['id'];
                
                updatePost($title, $texte, $id_ep, $id);
            } // fin de elseif update
                
            // action liste comment
                elseif ($_GET['action'] == 'comPost') {
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    listCom();
                }
            }
            // action supprimer comment signale
                elseif ($_GET['action'] == 'deleteCom') {
                deleteComSign($_GET['id'], $_GET['postId']);
            } else {
                throw new Exception(' Une erreur est survenue !');
            }
        } // fin de if $_SESSION
        else {
            throw new Exception(' Une erreur est survenue !');
        }
    } // fin de if $_GET action
    else {
        throw new Exception(' Une erreur est survenue !');
    }
} //fin de try

//récupère le message d'erreur transmis et affiche le message
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('view/frontend/error.php');
} 
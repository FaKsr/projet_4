<?php
spl_autoload_register(function($class)
{
    require_once('model/' . $class . '.php');
});

// Liste les chapitres
function listEpisods()
{
    $postManager = new PostManager(); //Création d'un objet, instancie la classe
    $posts       = $postManager->getPosts(); //Appel d'une fonction de cet objet
    
    require('view/backend/adminPostsView.php');
}

// Liste un chapitre selon son id
function episod()
{
    $postManager = new PostManager();
    $post        = $postManager->getPost($_GET['id']);
    
    require('view/backend/editPostView.php');
}

// Liste commentaire selon un chapitre
function listCom()
{
    $postManager    = new PostManager();
    $commentManager = new CommentManager();
    
    $post     = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    $signales = $commentManager->getCommentsSignales($_GET['id']);
    
    require('view/backend/listComView.php');
}

// Ajouter des commmentaires
function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines  = $commentManager->postComment($postId, $author, $comment);
    
    if ($affectedLines === false) {
        //Erreur gérée, remontée jusqu'au bloc try du routeur
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: admin.php?action=post&id=' . $postId);
    }
}

// Connexion admin
function connect()
{
    if (!empty($_POST['pseudo']) and !empty($_POST['password'])) {
        // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre
        $pseudo       = htmlspecialchars($_POST['pseudo']);
        $password     = htmlspecialchars($_POST['password']);
        $pseudolength = strlen($pseudo);
        
        if ($pseudolength <= 255) {
            $userManager       = new UserManager();
            $user              = $userManager->connect();
            // comparaison du mot de passe (en clair) au mot de passe haché en bdd
            $isPasswordCorrect = password_verify($password, $user[2]);
            
            if ($pseudo == $user[1]) {
                if ($isPasswordCorrect) {
                    // on ouvre la session avec $_SESSION
                    $_SESSION['admin'] = true;
                    require('view/backend/adminView.php');
                } else {
                    throw new Exception(' Votre mot de passe saisie est incorrect !');
                }
            } else {
                throw new Exception(' Votre identifiant saisie est incorrect !');
            }
        } else {
            throw new Exception(' Votre pseudo ne doit pas dépasser les 255 caractères ! ');
        }
    } else {
        throw new Exception('Tous les champs ne sont pas remplis ! ');
    }
}

// Affiche le formulaire de connexion
function login()
{
    if (isset($_SESSION['admin']) && ($_SESSION['admin'])) {
        require('view/backend/adminView.php');
    } else {
        require('view/backend/loginView.php');
    }
}

// Affiche le formulaire de changement de mot de passe
function changeP()
{
    if (isset($_SESSION['admin']) && ($_SESSION['admin'])) {
        require('view/backend/changeMdpView.php');
    } else {
        require('view/backend/loginView.php');
    }
}

// Changer de mot de passe
function changeMdp()
{
    if (isset($_POST['actualMPD'], $_POST['mpd'], $_POST['mpdConfirm'])) {
        // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre
        $actualMPD  = htmlspecialchars($_POST['actualMPD']);
        $mpd        = htmlspecialchars($_POST['mpd']);
        $mpdConfirm = htmlspecialchars($_POST['mpdConfirm']);
        
        $userManager       = new UserManager();
        $user              = $userManager->connect();
        // verification du mot de passe
        $isPasswordCorrect = password_verify($actualMPD, $user[2]);
        
        if ($isPasswordCorrect) {
            if ($mpd == $mpdConfirm && $mpd != "") {
                $userManager->changePass($mpd);
                require('view/backend/adminView.php');
            } // fin de if $mpd
            else {
                throw new Exception(' Votre nouveau mot de passe ne correspond pas à votre confirmation de mot de passe !');
            }
        } // fin de if isPasswordCorrect
        else {
            throw new Exception(' Votre saisie est incorrecte !');
            
        }
    } // fin de if isset
    else {
        throw new Exception(' Une erreur est survenue !');
    }
    
}


// Déconnexion de l'utilisateur admin
function deconnect()
{
    session_destroy();
    require('view/frontend/accueil.php');
}

// Editer
function editPost()
{
    $post['title']   = "";
    $post['numero']  = "";
    $post['content'] = "";
    
    require('view/backend/editPostView.php');
}

// Ecrire un chapitre
function createPost($title, $texte, $id_ep)
{
    $postManager = new PostManager();
    $post        = $postManager->createPost($title, $texte, $id_ep);
    
    require('view/backend/adminView.php');
}

// Supprimer un chapitre
function deletePost($deletePost)
{
    $postManager = new PostManager();
    $post        = $postManager->deletePost($deletePost);
    
    header('Location: admin.php?action=listPosts' . $postId);
}

// Modifier un chapitre
function updatePost($title, $texte, $id_ep, $id)
{
    $postManager = new PostManager();
    $post        = $postManager->updatePost($title, $texte, $id_ep, $id);
    
    header('Location: admin.php?action=listPosts');
}

// Supprimer un commentaire signale
function deleteComSign($deleteCom, $postId)
{
    $commentManager = new CommentManager();
    $sign           = $commentManager->deleteCom($deleteCom);
    
    header('Location: admin.php?action=comPost&id=' . $postId);
}
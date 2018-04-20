<?php
spl_autoload_register(function ($class) {
    require_once('model/'.$class.'.php');
});

// Liste tout les chapitres
function listPosts()
{
    $postManager = new PostManager(); //Création d'un objet, instancie la classe
    $posts = $postManager->getPosts(); //Appel d'une fonction de cet objet

    require('view/backend/adminView.php');
}

// Liste un chapitre selon son id
function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/backend/adminView.php');
}

//Ajouter des commmentaires
function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager-> postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        //Erreur gérée, remontée jusqu'au bloc try du routeur
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: admin.php?action=post&id=' . $postId);
    }
}

//Connexion admin
function connect()
{
    if (!empty($_POST['pseudo']) and !empty($_POST['password'])) {
        // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);
        $pseudolength = strlen($pseudo);

        if ($pseudolength <= 255) {
            $userManager = new UserManager();
            $user = $userManager->connect();
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

        // Permet de changer de mot de passe
function changeMdp()
{
    if (isset($_POST['actualMPD'], $_POST['mpd'], $_POST['mpdConfirm'])) {
        $actualMPD = htmlspecialchars($_POST['actualMPD']);
        $mpd = htmlspecialchars($_POST['mpd']);
        $mpdConfirm = htmlspecialchars($_POST['mpdConfirm']);

        $userManager = new UserManager();
        $user = $userManager->connect();
        $isPasswordCorrect = password_verify($actualMPD, $user[2]);
        
        if ($isPasswordCorrect) {
            if ($mpd == $mpdConfirm && $mpd != "") {
                $userManager->changePass($mpd);
                require('view/backend/adminView.php');
            } else {
                $messageError = " Votre mot de passe ne correspond pas à la confirmation ou vous n'avez pas saisie de nouveau mot de passe ! ";
                require('view/backend/changeMdpView.php');
            }
        } else {
            $messageError = "Votre ancien mot de passe ne correspond pas ! ";
            require('view/backend/changeMdpView.php');
        }
    } else {
        $messageError = "";
        require('view/backend/changeMdpView.php');
    }
}


// Déconnexion de l'utilisateur
function deconnect()
{
    session_destroy();
    header('Location: index.php');
}

// Ecrire un chapitre
function editPost()
{
    require('view/backend/editPostView.php');
}

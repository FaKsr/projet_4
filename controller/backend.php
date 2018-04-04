<?php
spl_autoload_register(function ($class) 
{
    require_once('model/'.$class.'.php');
});

// //chargement des classes
// require_once('model/PostManager.php');
// require_once('model/CommentManager.php');
// require_once('model/UserManager.php');

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
    function connect($pseudo, $password)
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);
        $userManager = new UserManager();
        $user = $userManager->connect($pseudo, $password);

        require('view/backend/adminView.php');
    }

    // // erreur lors de la connexion admin
    function erreur($err='')
    {
        $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
        exit('<p>'.$mess.'</p>
    <p>Cliquez <a href="loginView.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
    }

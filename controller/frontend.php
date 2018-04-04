<?php

//Chargment automatique des classes
spl_autoload_register(function ($class) 
{
    require_once('model/'.$class.'.php');
});

// //chargement des classes
// require_once('model/PostManager.php');
// require_once('model/CommentManager.php');


function listPosts()
{
    $postManager = new PostManager(); //Création d'un objet, instancie la classe
    $posts = $postManager->getPosts(); //Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

//Récupère les infos dont on a besoin pour ajouter commentaires
function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager-> postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        //Erreur gérée, remontée jusqu'au bloc try du routeur
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }

    //fonction signaler les commentaires
    function report()
    {
        $postManager = new PostManager();
        $reportCom = new CommentManager();
        $reports = $reportCom->reportComment($postId, $author, $comment);

        require('view/frontend/postView.php');
    }

    
}

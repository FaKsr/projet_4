<?php

//chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');


function listPosts()
{
    $postManager = new PostManager(); //Création d'un objet, instancie la classe
    $posts = $postManager->getPosts(); //Appel d'une fonction de cet objet

    require('view/backend/adminView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/backend/admin.php');
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
        header('Location: admin.php?action=post&id=' . $postId);
    }

    function connect($pseudo, $password){
        $userManager = new UserManager();
        $user = UserManager->connect($pseudo, $password);
        require('view/backend/adminView.php');


    }

    
}

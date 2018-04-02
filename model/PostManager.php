<?php

//Class PostManager gère les chapitres

require_once("model/Manager.php");
//toutes les fonctions concernants les posts

class PostManager extends Manager
{
    // Renvoie la liste des billets du blog
    public function getPosts()
    {
        
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    // Renvoie les informations sur un billet
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id=? ');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

}
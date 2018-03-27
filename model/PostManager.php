<?php

//Class PostManager gère les chapitres

require_once("model/Manager.php");
//toutes les fonctions concernants les posts

class PostManager extends Manager
{
    //récupère les chapitres
    public function getPosts()
    {
        
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    //récupère un chapitre selon l'id
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id=? ');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

}
<?php

//Class PostManager gère les chapitres


//toutes les fonctions concernants les posts

class PostManager extends Manager
{
    // Renvoie la liste des billets du blog
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, numero, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY numero DESC LIMIT 0, 100');

        return $req;
    }

    // Renvoie les informations sur un billet
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, numero, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id=? ');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    //créer un épisode
    public function createPost($title, $texte, $id_ep)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO posts (title, content, numero, creation_date) VALUES (?, ?, ?, NOW())");
        $req->execute(array($title, $texte, $id_ep));

        return $req;
    }

    //modifier un episode
    public function updatePost($title, $texte, $id_ep, $id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE posts SET title = ?, content = ?, numero = ? WHERE id = ? ");
        $req->execute(array($title, $texte, $id_ep, $id));
        
        return $req;
    }

    // supprimer un episode
    public function deletePost($deletePost)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("DELETE FROM posts WHERE id=?");
        $req->execute(array($deletePost));

        return $req;
    }
}

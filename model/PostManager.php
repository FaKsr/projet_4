<?php

//Class PostManager gère les chapitres


//toutes les fonctions concernants les posts

class PostManager extends Manager
{
    // Liste des billets du blog
    public function getPosts()
    {
        $db  = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, numero, DATE_FORMAT(creation_date, \'%d/%m/%Y \') AS creation_date_fr FROM posts ORDER BY numero DESC LIMIT 0, 100');
        
        return $req;
    }
    
    // Information sur un billet
    public function getPost($postId)
    {
        $db  = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, numero, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM posts WHERE id=? ');
        $req->execute(array(
            $postId
        ));
        $post = $req->fetch();
        
        return $post;
    }
    
    // Créer un épisode
    public function createPost($title, $texte, $id_ep)
    {
        $db  = $this->dbConnect();
        $req = $db->prepare("INSERT INTO posts (title, content, numero, creation_date) VALUES (?, ?, ?, NOW())");
        $req->execute(array(
            $title,
            $texte,
            $id_ep
        ));
        
        return $req;
    }
    
    // Modifier un episode
    public function updatePost($title, $texte, $id_ep, $id)
    {
        $db  = $this->dbConnect();
        $req = $db->prepare("UPDATE posts SET title = ?, content = ?, numero = ? WHERE id = ? ");
        $req->execute(array(
            $title,
            $texte,
            $id_ep,
            $id
        ));
        
        return $req;
    }
    
    // Supprimer un episode
    public function deletePost($deletePost)
    {
        $db  = $this->dbConnect();
        $req = $db->prepare("DELETE FROM posts WHERE id=?");
        $req->execute(array(
            $deletePost
        ));
        
        return $req;
    }
}
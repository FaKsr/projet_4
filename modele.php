<?php
require_once('manager.php');

class PostManager extends Manager
{

//fonction getAllPosts récupère tout les posts
public function getAllPosts()
{
    $db = $this->  dbConnect();

    $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

	return $req;
}

//fonction getPost renvoie un post selon l'id
public function getPost($postId)
{
    $db = $this->dbConnect();

    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM posts WHERE id = ?');

    $req->execute(array($postID));
    $post = $req->fetch();

    return $post;
}


}

?>



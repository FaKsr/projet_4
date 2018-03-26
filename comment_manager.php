<?php
require_once('model/manager.php');

class CommentManager extends Manager
{


//fonction getComments renvoie les commentaires selon le postID
public function getComments($postId)
{
    $db = $this -> dbConnect();

    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;

}
}
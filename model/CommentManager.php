<?php

//Class CommentManager gère les commentaires
require_once("model/Manager.php");

class CommentManager extends Manager
{
    // Renvoie le commentaire selon le post
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    //méthode envoie les données dans la bdd pour enregistrer les commentaires
    public function postComment($postId, $author, $comment)
    {
        $author = htmlspecialchars($_POST['author']);
        $comment = htmlspecialchars($_POST['comment']);
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    //méthode qui sert à signaler les commentaires
    public function reportComment($commentId)
    {
        $db = $this->dbConnect();
        $reports = $db->prepare('UPDATE comments set reported = reported +1 where id=?');
        $reports->execute(array($commentId));

        return $reports;
    }



}
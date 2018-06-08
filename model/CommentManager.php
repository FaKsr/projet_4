<?php

//Class CommentManager gère les commentaires


class CommentManager extends Manager
{
    // Commentaire selon le post
    public function getComments($postId)
    {
        $db       = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array(
            $postId
        ));
        
        return $comments;
    }
    
    // Commentaires signalés
    public function getCommentsSignales($postId)
    {
        $db       = $this->dbConnect();
        $signales = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? AND reported>3 ORDER BY comment_date DESC');
        $signales->execute(array(
            $postId
        ));
        
        return $signales;
    }
    
    // Insertion des commentaires
    public function postComment($postId, $author, $comment)
    {
        $author        = htmlspecialchars($_POST['author']);
        $comment       = htmlspecialchars($_POST['comment']);
        $db            = $this->dbConnect();
        $comments      = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array(
            $postId,
            $author,
            $comment
        ));
        
        return $affectedLines;
    }
    
    //Méthode qui sert à signaler les commentaires
    public function reportComment($commentId)
    {
        $db      = $this->dbConnect();
        $reports = $db->prepare('UPDATE comments set reported = reported +1 where id=?');
        $reports->execute(array(
            $commentId
        ));
        
        return $reports;
    }
    
    // Supprimer un episode
    public function deleteCom($deleteCom)
    {
        $db       = $this->dbConnect();
        $signales = $db->prepare("DELETE FROM comments WHERE id=?");
        $signales->execute(array(
            $deleteCom
        ));
        
    }
    
} 
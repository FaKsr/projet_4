<?php


class userManager
{
    public function connect($pseudo, $password)
    {
        $db = $this->dbConnect();
        $user = $this->db->prepare('SELECT * FROM user WHERE pseudo = jean_forteroche');
       
        return $user;
    }


    

}


// Un manager doit pouvoir :

// enregistrer une nouvelle entité ;

// modifier une entité ;

// supprimer une entité ;

// sélectionner une entité.
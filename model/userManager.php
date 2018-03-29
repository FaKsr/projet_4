<?php


class userManager
{
    public function login($pseudo, $password)
    {
        $db = $this->dbConnect();
        $user = $this->db->prepare('SELECT * FROM user WHERE pseudo = jean_forteroche');
        var_dump($user);
    }

    public function logged()
    {
        $db = $this->dbConnect();
        return isset($_SESSION['auth']);
    }

    

}


// Un manager doit pouvoir :

// enregistrer une nouvelle entité ;

// modifier une entité ;

// supprimer une entité ;

// sélectionner une entité.
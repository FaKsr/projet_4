<?php

require_once("model/Manager.php");

class UserManager extends Manager

{
    // Connexion à l'admin
    public function connect($pseudo, $password)
    {
        $db = $this->dbConnect();
        $user = $this->db->prepare('SELECT * FROM user WHERE pseudo = jean_forteroche');
       
        return $user;
    }

    // Changer son mot de passe
    public function changePass($password)
    {
        $db = $this->dbConnect();
        $password = password_hash($password, PASSWORD_DEFAULT);

        $req = $this->$db->prepare('UPDATE user SET password = :password WHERE id = 1');
        $req->execute(array(
        'password' => $pass
        ));
    }


    

}


// Un manager doit pouvoir :

// enregistrer une nouvelle entité ;

// modifier une entité ;

// supprimer une entité ;

// sélectionner une entité.
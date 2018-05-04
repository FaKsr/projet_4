<?php

require_once("model/Manager.php");

class UserManager extends Manager

{
    // Connexion à l'admin
    public function connect()
    {
        $db = $this->dbConnect();

        $req = $db->prepare('SELECT * FROM `b_user` WHERE id=1');
        $req->execute(array(0));
        $user = $req->fetch();
        
        return $user;

    }

    // Changer son mot de passe
    public function changePass($password)
    {
        $db = $this->dbConnect();
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $req = $db->prepare('UPDATE b_user SET pass = :pass WHERE id = 1');
        $req->execute(array('pass' => $password));
    }

}


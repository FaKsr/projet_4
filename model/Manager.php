<?php

//class parent Manager gère la bdd
class Manager
{
    //protected permet aux classes filles d'appeler la fonction dbConnect
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=gretaxao_Fannykp4;charset=utf8', 'gretaxao_fannyk', 'fannyk2017', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        return $db;
    }
        
} 
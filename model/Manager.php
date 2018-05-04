<?php

//class parent Manager gère la bdd
class Manager
{
    //protected permet aux classes filles d'appeler la fonction dbConnect
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=alaska;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        return $db;
    }
}
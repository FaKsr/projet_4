<?php

//class parent
class Manager
{
    //protected permet aux classes filles d'appeler la fonction dbConnect
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=tpblog;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
}
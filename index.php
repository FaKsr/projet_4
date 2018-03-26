<?php

// On charge le controller, pour que les fonctions soient en mémoire
require('controller.php');

if(isset($_GET['action']))
{
    if($_GET['action'])
    {
        if($_GET['action'] == 'listposts')
        {
            listPosts();
        }
        elseif ($_GET['action'] == 'post')
        {
            if(isset($_GET['id']) && $_GET['id'] > 0)
            {
                post();
            }
            else{
                echo 'Erreur : aucun identifiant de billet envoyé';
            }
        }
    }
    else
    {
        listPosts();
    }
}





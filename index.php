<?php

// On charge le fichier du modèle
require('modele2.php');

// On appelle la fonction, ce qui exécute le code à l'intérieur de modele.php . On y récupère la liste des billets dans la variable $req
// getPosts();
$posts = getPosts();


// On charge le fichier de la vue (l'affichage), qui va présenter les informations dans une page HTML   
require('indexView.php');





<?php
// fonction propre à PHP servira à maintenir la $_SESSION
session_start(); 

// On charge le controller, pour que les fonctions soient en mémoire
require_once('controller/backend.php');

try {
    // //Chargment automatique des classes
    // spl_autoload_register(function ($class) 
    // {
    //     require_once('model/'.$class.'.php');
    // });

// si le bouton "Connexion" est appuyé
if (isset($_POST['connexion'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $password = sha1($_POST['password']);
    $pseudolength = strlen($pseudo);
    // on vérifie que le champ "Pseudo" n'est pas vide
    if (empty($_POST['pseudo'])) {
        echo "Le champ Pseudo est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if (empty($_POST['password'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            // les champs sont bien posté et pas vide, on sécurise les données entrées par le membre
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $password = htmlspecialchars($_POST['password']);
            // on ouvre la session avec $_SESSION:
            $_SESSION['pseudo'] = $pseudo; // la session peut être appelée différemment et son contenu aussi peut être autre chose que le pseudo
            connect();
            header("Location: adminView.php");
        }
    }
}

    if (isset($_GET['action'] == 'connexion')) 
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = sha1($_POST['password']);
        $pseudolength = strlen($pseudo);

        if (!empty($_POST['pseudo']) and !empty($_POST['password'])) {
            if (pseudolength <= 255) {
                if ($pseudo == "jean_forteroche") {
                    if ($password == "jean_for") {
                        connect();
                    } else {
                        throw new Exception(' Votre mot de passe ne correspond pas !');
                    }
                } else {
                    throw new Exception(' Votre identifiant ne correspond pas !');
                }
            } else {
                throw new Exception(' Votre pseudo ne doit pas dépasser les 255 caractères ! ');
            }
        } else {
            throw new Exception('Tous les champs ne sont pas remplis ! ');
        }
    }

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } 
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            } 
            else {
                throw new Exception(' Aucun identifiant de billet envoyé'); //stop le bloc try pour aller directement au catch
            }
        } 
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                //contrôle de saisie des champs
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } 
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } 
            else {
                throw new Exception(' Aucun identifiant de billet envoyé');
            }
        }
    } 
    else {
        listPosts();
    }

} //fin de try

//récupère le message d'erreur transmis et affiche le message
catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require_once('view/backend/errorView.php');
}


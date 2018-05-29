<!DOCTYPE html>
<html>
    <head>

        <title><?= $title ?></title>  
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="blog de l'écrivain Jean Forteroche, Billet simple pour l'Alaska.">
        <meta name="keywords" content="blog, épisodes, alaska, écrivain, auteur"/>

        <!-- Meta Facebook -->
        <meta property="og:title" content="Billet simple pour l'Alaska" />
        <meta property="og:url" content="Blog Jean Forteroche" />
        <meta property="og:site_name" content="jean-forteroche.fr" />
        <meta property="og:description" content="Découvrez le nouveau roman de Jean Forteroche par épisode." />
        <meta property="og:image" content="#" />

        <!-- Meta Twitter  -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Billet simple pour l'Alaska" />
        <meta name="twitter:url" content="Blog Jean Forteroche" />
        <meta name="twitter:descritpion" content="Découvrez le nouveau roman de Jean Forteroche par épisode." />
        <meta name="twitter:image" content="#" />
            
        <!-- Stylesheets -->
        <link rel="stylesheet" media="screen" type="text/css" title="Style" href="./public/css/style.css"/> 
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

    </head>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"> <img id="logo" src="./public/images/logo.svg" alt="logo de Jean Forteroche"/><i> Jean Forteroche</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=accueil">Accueil</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=tell">Mon histoire</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.php?action=listPosts">Episodes</a>
            </li>
            </ul>
        </div>
</nav>

    <body>

    <div id="contenu" class="container">
            <?= $content ?>
    </div>
       
        <!-- Footer -->
        <footer class="footer">
            <div id="footer" class="container bg-dark">
                <span class="text-muted">Kercode&copy2018  Blog | <a href="admin.php?action=login">Jean Forteroche</a></span> </span>
            </div>
        </footer>

    </body>

    <!-- Script Jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Script Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Script Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
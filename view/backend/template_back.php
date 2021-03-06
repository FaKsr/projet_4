<!DOCTYPE html>
<html>
    <head>

        <title><?= $title ?></title> 
        
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="blog de l'écrivain Jean Forteroche, Billet simple pour l'Alaska.">
        <meta name="keywords" content="blog, épisodes, alaska, écrivain, auteur" />

        <!-- Meta Facebook -->
        <meta property="og:title" content="Billet simple pour l'Alaska" />
        <meta property="og:url" content="#" />
        <meta property="og:site_name" content="jean-forteroche.fr" />
        <meta property="og:description" content="Découvrez le nouveau roman de Jean Forteroche par épisode." />
        <meta property="og:image" content="#" />

        <!-- Meta Twitter  -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Billet simple pour l'Alaska" />
        <meta name="twitter:url" content="#" />
        <meta name="twitter:descritpion" content="Découvrez le nouveau roman de Jean Forteroche par épisode." />
        <meta name="twitter:image" content="#" />
          
        <!-- Stylesheets -->
        <link rel="stylesheet" media="screen" type="text/css" title="Style" href="public/css/style.css" /> 
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>
    <body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark navbar-justify-content-end">
            <a class="navbar-brand" href="admin.php?action=login">Tableau de bord</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?action=accueil">Blog<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?action=edit">Editer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?action=listPosts">Chapitres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?action=switch">Paramètre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php?action=deconnexion">Déconnexion</a>
                </li>
            </ul>
        </div>
        </nav>
        
    </header>
  
  
    <!-- Content -->
    <main role="main" class="container">
        <div class="container">
        <?= $content ?> 
        </div>
    </main> 

        <!-- Footer -->
        <footer class="footer">
            <div id="footer" class="container bg-dark">
            <span class="text-muted">Kercode &copy;2018 Jean Forteroche | Blog</span>
            </div>
        </footer>
    

    <!-- Script Jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Script Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Script Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
<?php
session_start();
$titre="Identification";

//Attribution des variables de session
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';

echo '<h1>Connexion</h1>';
//on vérifie que personne n'est déjà connecté
if ($id!=0) erreur(ERR_IS_CO);

?>



<div>

<form method="POST" action="">
	<label for="pseudo">Pseudo:
<input type="text" name="pseudo" placeholder="identifiant" id="pseudo" value="">
</label>
<br>
<label for="password">Mot de passe:
<input type="password" name="password" placeholder="Mot de passe" id="password" value="">
</label>
<br>
<input type="submit" name="connexion" value="connexion">
</div>

<p><a href="../../index.php">Retour au blog</a></p>
		

<?php require('template_back.php'); ?>
    
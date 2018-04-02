<div>
<h1>Login de Jean Forteroche</h1><br>
<form method="POST" action="">
	<label for="pseudo">Pseudo:
<input type="text" name="pseudo" placeholder="identifiant" id="pseudo" value="<?php if (isset($pseudo)) {
    echo $pseudo;
}?>">
</label>
<br>
<label for="password">Mot de passe:
<input type="password" name="password" placeholder="Mot de passe" id="password">
</label>
<br>
<input type="submit" name="login" value="Je me connecte">
</form>
</div>
					
		
          
     
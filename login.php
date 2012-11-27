  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
 <form name="login" method="POST">
	<fieldset>
		<legend>Formulaire de connexion</legend>
		<label name="lname">Nom</label>
		<input name="lname" type="text" placeholder="votre nom"/>
		<label name="fname">Prenom</label>
		<input name="fname" type="text" placeholder="votre prenom"/>
		<label name="passwd" >Mot de passe</label>
		<input name="passwd" type="password"/>
		
		<button type="submit" class="btn">connexion</button>
	</fieldset>
</form>
<?php 
	//test de connexion avec des valeurs tests
	$nom='souan';
	$prenom='edouard';
	$mdp='test';
	if(isset($_POST['lname'])==$nom)
	{
		if(isset($_POST['fname'])==$prenom)
		{
			if(isset($_POST['passwd'])==$mdp)
				echo('connexion établie');
		}
	}
?>
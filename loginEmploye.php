<?php 
	//test de connexion avec des valeurs tests
	$login='e.souan';
	$mdp='test';

	if(isset($_POST['login']) AND $_POST['login']==$login)
	{
		echo("comparaison des login ok");?></br><?php
		if(isset($_POST['passwd']) AND $_POST['passwd']==$mdp)
			{
				echo("comparaison des mots de passes ok");?></br><?php
				echo('connexion établie');
				HEADER("location:./desk.php");
			}
	}
?>
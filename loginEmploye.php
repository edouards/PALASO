<?php 
	//test de connexion avec des valeurs tests
	include('connexion.php');
	$resultatlog=$connexion->query("SELECT log_log FROM LOGIN");
	$resultatlog->setFetchMode(PDO::FETCH_OBJ);
	while($login = $resultatlog->fetch())
	{
		if(isset($_POST['login']) AND $_POST['login']==$login->log_log)
		{
			$resultatlog->closeCursor();
			$resultatpwd=$connexion->query("SELECT log_pwd FROM LOGIN");
			$resultatpwd->setFetchMode(PDO::FETCH_OBJ);
			while($pwd = $resultatpwd->fetch())
			{
				if(isset($_POST['passwd']) AND $_POST['passwd']==$pwd->log_pwd)
				{
					$resultatpwd->closeCursor();
					HEADER("location:./desk.php");
				}else if(!isset($_POST['passwd']) OR $_POST['passwd']!=$pwd->log_pwd)
				{
					echo("Mot de passe incorrect");
					break;
				}
			}
		}else if(!isset($_POST['login']) OR $_POST['login']!=$login->log_log)
		{
			echo("Login incorrect");
			break;
		}
	}
?>
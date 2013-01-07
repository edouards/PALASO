<?php 
	//Authentification
	include('connexion.php');
	$resultatlog=$connexion->query("SELECT * FROM LOGIN ORDER BY log_id");
	$resultatlog->setFetchMode(PDO::FETCH_OBJ);
	while($login = $resultatlog->fetch())
	{
		if(isset($_POST['login']) AND $_POST['login']==$login->log_log)
		{
			if(isset($_POST['passwd']) AND $_POST['passwd']==$login->log_pwd)
			{
				HEADER("location:./desk.php?p=interim");
			}
		}
	}
	
	$resultatlog->closeCursor();
?>
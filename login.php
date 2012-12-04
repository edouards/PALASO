  <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
  <style type="text/css">

      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

  </style>
  <div class='container'>
		<form name="login" method="POST" class="form-signin">
			<fieldset>
				<legend>Formulaire de connexion</legend>
				<label name="lname">Nom</label>
				<input name="lname" type="text" placeholder="votre nom"/>
				<label name="fname">Prenom</label>
				<input name="fname" type="text" placeholder="votre prenom"/>
				<label name="passwd" >Mot de passe</label>
				<input name="passwd" type="password"/>
				
				<button type="submit" class="btn btn-large">connexion</button>
				<a href="main.php"><button type="button" class=" btn btn-large btn-inverse pull-right">Accueil</button></a>
			</fieldset>
		</form>
	</div>
<?php 
	//test de connexion avec des valeurs tests
	$nom='souan';
	$prenom='edouard';
	$mdp='test';

	if(isset($_POST['lname']) AND $_POST['lname']==$nom)
	{
		echo("comparaison des noms ok");?></br><?php
		if(isset($_POST['fname']) AND $_POST['fname']==$prenom)
		{
			echo("comparaison des prénoms ok");?></br><?php
			if(isset($_POST['passwd']) AND $_POST['passwd']==$mdp)
				{
					echo("comparaison des mots de passes ok");?></br><?php
					echo('connexion établie');
					HEADER("location:./desk.php");
				}
		}
	}
?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<div class="form">
<form class="form-signin" action="inscription.php" method="post">
 
     <fieldset class="etat-civil">
          <legend>Etat civil</legend>
         <label for="nom">Nom</label>
         <input id="nom" name="nom" type="text" /><br />
         <label for="prenom">Prénom </label>
         <input id="prenom" name="prenom" type="text" /><br />
         <label for="date-de-naissance">Date de naissance</label>
         <input id="date-de-naissance" name="date-de-naissance" type="text" />
     </fieldset>
     <fieldset class="adresse">
          <legend>Adresse</legend>
          <label>Rue</label>
          <input id="rue" name="rue" type="text" /><br />
          <label>Code postal</label>
          <input id="code-postal" name="code-postal" type="text" /><br />
          <label>Ville</label>
          <input id="ville" name="ville" type="text" />
     </fieldset>
	 <fieldset class="identifiant">
          <legend>Identifiant de connexion</legend>
          <label>Adresse mail</label>
          <input id="mail" name="mail" type="text" /><br />
          <label>Mot de Passe</label>
          <input id="pwd" name="pwd" type="text" /><br />
          <label>Conformation mot de passe</label>
          <input id="pwd" name="pwd" type="text" />
		  <button class="btn btn-large btn-info pull-right" >Valider</button>
     </fieldset>
	 
     
	 
	
</form>
</div>
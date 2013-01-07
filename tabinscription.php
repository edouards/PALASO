  <!-- Fonctions de validation et de suppression des inscriptions-->
 <?php
 	
 	function Validation($int_id)
 	{
 		if(isset($int_id))
 		{
	 		include("connexion.php");
	 		$connexion->exec("UPDATE INTERIMAIRE SET int_valid=1 WHERE int_id=".$int_id);
 		}
 	}

 	function Suppression($int_id)
 	{
 		if(isset($int_id))
 		{
 			include("connexion.php");
 			$connexion->exec("DELETE FROM INTERIMAIRE WHERE int_id=".$int_id);
 			

 		}
 	}
 ?>


  <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Photo d'identité</th>
			<th>N° SECU</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Adresse postale</th>
			<th>Telephone</th>
			<th>Mobile</th>
			<th>E-mail</th>
			<th>Métier</th>
			<th>Valider l'inscription</th>
			<th>Supprimer l'inscription</th>
			

		</tr>
	</thead>
	<tbody>
	<?php
		include("connexion.php");
		$interim=$connexion->query("SELECT * FROM INTERIMAIRE ORDER BY int_nom ASC");
		$interim->setFetchMode(PDO::FETCH_OBJ);
		while($interimaire = $interim->fetch())
		{
			if($interimaire->int_valid!=1){
	?>
			<tr>
				<td><?php   
				if($interimaire->int_picture!=null)
				{
					?><image src="<?php echo $interimaire->int_picture;?>" class="img-rounded" height="100px" width="80px"/><?php
				} 
				else
				{
					?><image src="Phototech/identite.jpg" class="img-rounded" height="100px" width="80px"/><?php
				}
				?></td>
				<td><?php echo $interimaire->int_ss; ?></td>
				<td><?php echo $interimaire->int_nom; ?></td>
				<td><?php echo $interimaire->int_prenom; ?> </td>
				<td><?php echo $interimaire->int_adr1." ".$interimaire->int_adr2." ".$interimaire->int_cp." ".$interimaire->int_ville; ?></td>
				<td><?php echo $interimaire->int_telephone; ?></td>
				<td><?php echo $interimaire->int_mobile; ?></td>
				<td><?php echo $interimaire->int_mail; ?></td>
				<?php
					$met=$connexion->query("SELECT * FROM METIER ORDER BY met_libelle ASC");
					$met->setFetchMode(PDO::FETCH_OBJ);
					while($metier = $met->fetch())
					{
						if($metier->met_id==$interimaire->int_metier)
						{
							?>
				<td><?php echo $metier->met_libelle; ?></td>
							<?php
						}
					}
				?>
				<!-- Bouton permettant de valider une inscription en se servant de la fonction Validation -->
				<td>
					<form id='valid' method="post" action="desk.php?p=signin&v=<?php echo $interimaire->int_id;?>&s=0">
						<button type="submit" class="btn btn-success">Valider</button>
					</form>
				</td>

				<!-- Bouton de suppression de l'inscription -->
				<td>
					<form id='sup' method="post" action="desk.php?p=signin&v=0&s=<?php echo $interimaire->int_id;?>">
						<button type="submit" class="btn btn-warning">Supprimer</button>
						<a href="mailto:<?php echo $interimaire->int_mail;?>?Subject=Informations%20Incomplètes">Envoyer un mail</a>
					</form>
				</td>
				
			</tr>
	<?php
			}
		}
	?>
	</tbody>
  </table>


  <!-- Appel de la fonction Validation ou de la fonction Suppression  -->
 <?php
 	$mail="";

 	if(isset($_GET['v']))
 	{
 		Validation($_GET['v']);
 	}

 	if(isset($_GET['s']))
 	{
 		Suppression($_GET['s']);
 	}

 ?>
  <!-- Fonctions de validation et de suppression des offres-->
 <?php
 	
 	function Validation($offre_numero)
 	{
 		if(isset($offre_numero))
 		{
	 		include("connexion.php");
	 		$connexion->exec("UPDATE OFFRE SET off_valid=1 WHERE off_numero=".$offre_numero);
 		}
 	}

 	function Suppression($offre_numero,$ent_mail)
 	{
 		if(isset($offre_numero) && isset($ent_mail))
 		{
 			include("connexion.php");

 			$connexion->exec("DELETE FROM OFFRE WHERE off_numero=".$offre_numero);
 			

 		}
 	}
 ?>

<!-- Tableau des offres non validées qu'on va chercher sur la BDD-->
  <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Libelle</th>
			<th>Métier</th>
			<th>Type</th>
			<th>Date début prévisionnel</th>
			<th>Date fin prévisionnel</th>
			<th>Période d'essai en jour</th>
			<th>Nombre de personnes</th>
			<th>Motif de recours</th>
			<th>Entreprise</th>
			<th>Valider l'offre</th>
			<th>Supprimer l'offre</th>

		</tr>
	</thead>
	<tbody>
	<?php
		include('connexion.php');
		$off=$connexion->query("SELECT * FROM OFFRE ORDER BY off_libelle ASC");
		$off->setFetchMode(PDO::FETCH_OBJ);
		while($offre = $off->fetch())
		{
			if($offre->off_valid!=1){
	?>
			<tr>
				<td><?php echo $offre->off_libelle; ?></td>

	<?php 		$met=$connexion->query("SELECT * FROM METIER ORDER BY met_libelle ASC"); 
				$met->setFetchMode(PDO::FETCH_OBJ);
				while($metier =$met->fetch())
				{
					if($metier->met_id==$offre->off_metier)
					{
						?>
				<td><?php echo $metier->met_libelle; ?></td>
						<?php
					}
				}

				//Requêtes allant chercher les valeurs dans la BDD
				$types=$connexion->query("SELECT * FROM TYPE_OFFRE ORDER BY type_code");
				$types->setFetchMode(PDO::FETCH_OBJ);
				while($type =$types->fetch())
				{
					if($type->type_id==$offre->off_type)
					{
						?>
				<td><?php echo $type->type_libelle; ?></td>
						<?php
					}
				}
	?>
				<td><?php echo $offre->off_dateDebutPrevisionnel; ?></td>
				<td><?php echo $offre->off_dateFinPrevisionnel; ?></td>
				<td><?php echo $offre->off_periodeEssaiJours; ?></td>
				<td><?php echo $offre->off_nombrePersonnes; ?></td>
	<?php
				$motif=$connexion->query("SELECT * FROM MOTIF_DE_RECOURS ORDER BY mot_id ASC");
				$motif->setFetchMode(PDO::FETCH_OBJ);
				while ($motifrecours = $motif->fetch())
				{
					if($motifrecours->mot_id==$offre->off_motif)
					{
	?>
				<td><?php echo $motifrecours->mot_libelle; ?></td>
	<?php
					}
				}

				$ent=$connexion->query("SELECT * FROM ENTREPRISE ORDER BY ent_raisonsociale ASC");
				$ent->setFetchMode(PDO::FETCH_OBJ);
				$lemail="";
				while($entreprise=$ent->fetch())
				{
					if($entreprise->ent_id==$offre->off_entreprise)
					{
	?>
				<td><?php echo $entreprise->ent_raisonsociale; ?></td> 
	<?php 			$lemail=$entreprise->ent_mail;
					}
				}
	?>
				<!-- Bouton permettant de valider une offre en se servant de la fonction Validation -->
				<td>
					<form id='valid' method="post" action="desk.php?p=validoffre&v=<?php echo $offre->off_numero;?>&s=0&e=0">
						<button type="submit" class="btn btn-success">Valider</button>
					</form>
				</td>

				<!-- Bouton de suppression de l'offre-->
				<td>
					<form id='sup' method="post" action="desk.php?p=validoffre&v=0&s=<?php echo $offre->off_numero;?>&e=<?php echo $offre->off_entreprise;?>">
						<button type="submit" class="btn btn-warning">Supprimer</button>
						<a href="mailto:<?php echo $lemail;?>?Subject=Informations%20Incomplètes">Envoyer un mail</a>
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

 	if(isset($_GET['s']) && isset($_GET['e']))
 	{
 		$Lesentreprises= $connexion->query("SELECT * FROM ENTREPRISE");
 		$Lesentreprises->setFetchMode(PDO::FETCH_OBJ);
 		while($ent=$Lesentreprises->fetch())
 		{
 			if ($_GET['e']==$ent->ent_id) 
 			{
 				$mail=$ent->ent_mail;
 			}
 		}

 		Suppression($_GET['s'],$mail);
 	}

 ?>
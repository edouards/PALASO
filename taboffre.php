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

		</tr>
	</thead>
	<tbody>
	<?php
		include('connexion.php');
		$off=$connexion->query("SELECT * FROM OFFRE ORDER BY off_libelle ASC");
		$off->setFetchMode(PDO::FETCH_OBJ);
		while($offre = $off->fetch())
		{
			if($offre->off_valid==1){
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
				while($entreprise=$ent->fetch())
				{
					if($entreprise->ent_id==$offre->off_entreprise)
					{
	?>
				<td><?php echo $entreprise->ent_raisonsociale; ?></td> 
	<?php
					}
				}
	?>

			</tr>
	<?php
			}
		}
	?>
	</tbody>
  </table>

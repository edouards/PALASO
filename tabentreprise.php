  <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>N°Siret</th>
			<th>Raison Sociale</th>
			<th>Adresse</th>
			<th>Telephone</th>
			<th>Fax</th>
			<th>E-mail</th>

		</tr>
	</thead>
	<tbody>
	<?php
		include('connexion.php');
		$ent=$connexion->query("SELECT * FROM ENTREPRISE ORDER BY ent_raisonsociale ASC");
		$ent->setFetchMode(PDO::FETCH_OBJ);
		while($entreprise = $ent->fetch())
		{ 
	?>
			<tr>
				<td><?php echo $entreprise->ent_siret; ?></td>
				<td><?php echo $entreprise->ent_raisonsociale ?></td>
				<td><?php echo $entreprise->ent_adresse1." ".$entreprise->ent_adresse2." ".$entreprise->ent_CP." ".$entreprise->ent_ville; ?></td>
				<td><?php echo $entreprise->ent_telephone; ?></td>
				<td><?php echo $entreprise->ent_fax; ?></td>
				<td><?php echo $entreprise->ent_mail; ?></td>
			</tr>
	<?php
		}
		$ent->closeCursor();
	?>
	</tbody>
  </table>
<div class="span9">
  <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>N° SECU</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Adresse postale</th>
			<th>Telephone</th>
			<th>Mobile</th>
			<th>E-mail</th>
			<th>Métier</th>
			

		</tr>
	</thead>
	<tbody>
	<?php
		include("connexion.php");
		$interim=$connexion->query("SELECT * FROM INTERIMAIRE ORDER BY int_nom ASC");
		$interim->setFetchMode(PDO::FETCH_OBJ);
		while($interimaire = $interim->fetch())
		{
	?>
			<tr>
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
				
			</tr>
	<?php
		}
		$met->closeCursor();
		$interim->closeCursor();
	?>
	<tbody>
  </table>
</div>
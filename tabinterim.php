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
			<th>Documents</th>
			

		</tr>
	</thead>
	<tbody>
	<?php
		include("connexion.php");
		$interim=$connexion->query("SELECT * FROM INTERIMAIRE ORDER BY int_nom ASC");
		$interim->setFetchMode(PDO::FETCH_OBJ);
		while($interimaire = $interim->fetch())
		{
			if($interimaire->int_valid==1){
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
				<td><a href="desk.php?p=docs&i=<?php echo $interimaire->int_id;?>">voir les documents</a></td>
				
			</tr>
	<?php
			}
		}
		$met->closeCursor();
		$interim->closeCursor();
	?>
	</tbody>
  </table>
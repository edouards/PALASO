<?php
	$firm=array(
		'nsiret'=>array('1234567890','0987654321','1092387456','5432167890'),
		'raisoc'=>array('SOMETIA','AMD','M2K','Facebook'),
		'ad'=>array('8 rue Eiffel 33000 Bordeaux','16 Bvd Wilson 75000 Paris','987 2nd street NY','800 Nixon street PaloAlto LA'),
		'tel'=>array('0557234654','0557908133','01241546876','16453123980'),
		'email'=>array('a.hernaud@sometia.com','j.perin@amd.net','t.walker@mtok.com','m.zucherberg@fbook.com')
	);
?>
<div class="span4">
  <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>N°Siret</th>
			<th>Raison Sociale</th>
			<th>Adresse postale</th>
			<th>N°Telephone</th>
			<th>E-mail</th>

		</tr>
	</thead>
	<tbody>
	<?php
		foreach($firm['nsiret'] as $key=>$nom)
		{
	?>
			<tr>
				<td><?php echo($nom);?></td>
				<td><?php echo($firm['raisoc'][$key]); ?> </td>
				<td><?php echo($firm['ad'][$key]); ?></td>
				<td><?php echo($firm['tel'][$key]); ?></td>
				<td><?php echo($firm['email'][$key]); ?></td>
			</tr>
	<?php
		}
	?>
	<tbody>
  </table>
</div>
<a href="main.php"><button class="btn btn-large btn-inverse">Accueil</button></a>
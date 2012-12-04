 <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
 <?php
			$users=array(
				'nom'=>array('PALLAS','LARRUE','SOUAN'),
				'prenom'=>array('Amandine','Florent','Edouard')
				);
		?>
<div class="container">
	<div class="span3">
	  <table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prenom</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($users['nom'] as $key=>$nom)
			{
		?>
				<tr>
					<td><?php echo($nom);?></td>
					<td><?php echo($users['prenom'][$key]);?></td>
				</tr>
		<?php
			}
		?>
		<tbody>
	  </table>
	</div>
</div>
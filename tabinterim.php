<?php
	$users=array(
		'nom'=>array('PALLAS','LARRUE','SOUAN'),
		'prenom'=>array('Amandine','Florent','Edouard'),
		'ad'=>array('6 rue du vent 33000 Bordeaux','16 chemin de Benauge 24130 Montluçon','67 rue Mestre résidence Batany 33200 Bordeaux'),
		'tel'=>array('0618564530','0624318720','0671101418'),
		'email'=>array('amandine.pallas@epsi.fr','florent.larrue@epsi.fr','e.souanmarcelon@epsi.fr'),
		'competences'=>array('génie logiciel','analyste programmeur','administrateur réseaux')
	);
?>
<div class="span4">
  <table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Date de Naissance</th>
			<th>Adresse postale</th>
			<th>N°Telephone</th>
			<th>E-mail</th>

		</tr>
	</thead>
	<tbody>
	<?php
		foreach($users['nom'] as $key=>$nom)
		{
	?>
			<tr>
				<td><?php echo($nom);?></td>
				<td><?php echo($users['prenom'][$key]); ?> </td>
				<td><?php echo($users['ad'][$key]); ?></td>
				<td><?php echo($users['tel'][$key]); ?></td>
				<td><?php echo($users['email'][$key]); ?></td>
				<td><?php echo($users['competences'][$key]); ?></td>
			</tr>
	<?php
		}
	?>
	<tbody>
  </table>
</div>
<a href="main.php"><button class="btn btn-large btn-inverse">Accueil</button></a>
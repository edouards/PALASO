<div class="span12 offset1">
	<?php
	//Tableau contenant les valeurs possibles du paramètre p
	$mespages=array("interim","entreprises","offres","validoffre","signin");

	//Boucle de parcours du tableau
	foreach ($mespages as $value)
	{
		if($value==$_REQUEST['p'] && isset($_REQUEST['p']))
		{
			switch ($value) 
			{
				case 'interim':
				?>
				<!-- Affiche la position de l'enployé dans les pages-->
				<ul class="breadcrumb">
  					<li>Récapitulatif <span class="divider">/</span></li>
  					<li class="active">Les Intérimaires </li>
				</ul>
				<?php
					include("tabinterim.php");
					break;
				case 'entreprises':
				?>
				<!-- Affiche la position de l'enployé dans les pages-->
				<ul class="breadcrumb">
  					<li>Récapitulatif <span class="divider">/</span></li>
  					<li class="active">Les Entreprises </li>
				</ul>
				<?php
					include("tabentreprise.php");
					break;
				case 'offres':
				?>
				<!-- Affiche la position de l'enployé dans les pages-->
				<ul class="breadcrumb">
  					<li>Récapitulatif <span class="divider">/</span></li>
  					<li class="active">Les Offres </li>
				</ul>
				<?php
					include("taboffre.php");
					break;
				case 'validoffre':
				?>
				<!-- Affiche la position de l'enployé dans les pages-->
				<ul class="breadcrumb">
  					<li>A valider <span class="divider">/</span></li>
  					<li class="active">Les Offres </li>
				</ul>
				<?php
					include("validoffre.php");
					break;
				case 'signin':
				?>
				<!-- Affiche la position de l'enployé dans les pages-->
				<ul class="breadcrumb">
  					<li>A valider <span class="divider">/</span></li>
  					<li class="active">Les Inscriptions </li>
				</ul>
				<?php
					include("tabinscription.php");
					break;
			}
		}
	}
?>
</div>
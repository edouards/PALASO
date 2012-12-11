<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" language="javascript" src="jquery/jquery.js"></script>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<?php include("header.php"); ?>
		<div class="container">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#interimaires" data-toggle="tab">Intérimaires</a></li>
					<li><a href="#entreprises" data-toggle="tab">Entreprises</a></li>
					<li><a href="#offres" data-toggle="tab">Offres</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="interimaires">
					  <p> <?php require_once('tabinterim.php'); ?></p>
					</div>
					<div class="tab-pane" id="entreprises">
					 <p> <?php require_once('tabentreprise.php'); ?></p>
					</div>
					<div class="tab-pane" id="offres">
					  <p>What up girl, this is Section C.</p>
					</div>
				</div>
			</div> <!-- /tabbable -->
		</div>
		
	</body>
</html>
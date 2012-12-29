<!DOCTYPE html>
<html>
	<head>
		<title>PALASO</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

	</head>
	
	<body>
		<?php
			include("header.php");
		?>
		
		
		<div class="bouton">
						
			<ul><a href="loginCandidat.php">
					<button class="btn btn-large" type="button">Espace candidats</button>
				</a>
					
				<a href="loginEntreprise.php">
					<button class="btn btn-large" type="button">Espace entreprises</button>
				</a>
			</ul>					
		</div>
	
	
	<?php
		include("FormCon.php")
	?>
	
	<?php
		include("pdp.php");
	?>

	<script src="jquery/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>
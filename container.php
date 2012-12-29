<div class="span12 offset1">
	<?php
	$mespages=array("interim","entreprises","offres","validoffre","signin");
	foreach ($mespages as $value)
	{
		if($value==$_REQUEST['p'] && isset($_REQUEST['p']))
		{
			switch ($value) 
			{
				case 'interim':
					include("tabinterim.php");
					break;
				case 'entreprises':
					include("tabentreprise.php");
					break;
				case 'offres':
					include("taboffre.php");
					break;
				case 'validoffre':
					include("validoffre.php");
					break;
				case 'signin':
					include("tabinscription.php");
					break;
			}
		}
	}
?>
</div>
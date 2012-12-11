<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<?php session_start(); ?>
<div class="form">
<form method="POST" class="form-inline">
  <input type="text" class="input-small" name="login" placeholder="login">
  <input type="password" class="input-small" name="passwd" placeholder="Password">
 
  <button type="submit" class="btn">Se Connecter</button>
</form>
</div>
<?php
	include("loginEmploye.php");
?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php session_start();

include_once('../../../tools/user.php'); 
include_once('../../../tools/connection.php');
	  
	  if(isset($_SESSION['is_connected']))
	  {?>
	  	 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../../CSS/design_accueil.css" />
	</head>
	<body>
		<?php include('../../../menutop.php'); ?>
		<div id="new_todo">
		
			<div id="list_details">
			<h4> D&eacute;tails de la liste </h4>
			<label for="titre">Titre : </label><input type="text" name="titre" id="titre" />
			<p>Due Time ? </p>
			<label for="day">Jour :</label><select name="day"><?php for($i = 1; $i <= 31; $i++) {echo "<option>";echo $i; echo "</option>";} ?></select>
			<label for="month">Mois : </label><select name="month"><option>Janvier</option><option>Fevrier</option><option>Mars</option><option>Avril</option><option>Mai</option><option>Juin</option><option>Juillet</option><option>Aout</option><option>Septembre</option><option>Octobre</option><option>Novembre</option><option>Decembre</option></select>
			<label for="year"> Ann&eacute;e : </label><select name="year"><?php for($i = 2013; $i<=2020; $i++) {echo "<option>";echo $i; echo "</option>";} ?></select>
			<label for="hour"> Heure : </label><select name="hour"><?php for($i=1; $i<24; $i++) {echo "<option>";echo $i; echo "</option>";}?></select>
			<label for="minute">Minute : </label><select name="minute"><?php for($i=00; $i < 60; $i++){echo "<option>";echo $i; echo "</option>";} ?></select>
			</div>
			<div id="items_details">
				<div id="item">
				</div> 
				<div id="add_item">
				</div>
			</div>
		</div>
	</body>
	</html>
	<?php
	} ?>
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
		<div id="home">
		
			<div id="aside_left">
			<h4> D&eacute;tails de la liste </h4>
			<label for="titre">Titre : </label><input type="text" name="titre" id="titre" />
			<p>Due Time ? </p>
			<label for="day">Jour :</label><select name="day"><?php for($i = 1; $i <= 31; $i++) {echo "<option>";echo $i; echo "</option>";} ?></select>
			<label for="month">Mois : </label><select name="month"><option>Janvier</option><option>Fevrier</option><option>Mars</option><option>Avril</option><option>Mai</option><option>Juin</option><option>Juillet</option><option>Aout</option><option>Septembre</option><option>Octobre</option><option>Novembre</option><option>Decembre</option></select>
			<label for="year"> Ann&eacute;e : </label><select name="year"><?php for($i = 2013; $i<=2020; $i++) {echo "<option>";echo $i; echo "</option>";} ?></select>
			<label for="hour"> Heure : </label><select name="hour"><?php for($i=1; $i<24; $i++) {echo "<option>";echo $i; echo "</option>";}?></select>
			<label for="minute">Minute : </label><select name="minute"><?php for($i=00; $i < 60; $i++){echo "<option>";echo $i; echo "</option>";} ?></select>
			</div>
			<div id="aside_right">
				<div id="top">
					<h4>Add an item :</h4><form method="POST" action="../controls/add_item.php">
						<label for="label">Label </label><input type="text" name="label" id="label" /><br />
						<p>Remeber me on : </p>
						<label for="day">Jour :</label><select name="day"><?php for($i = 1; $i <= 31; $i++) {echo "<option>";echo $i; echo "</option>";} ?></select>
						<label for="month">Mois : </label><select name="month"><option>Janvier</option><option>Fevrier</option><option>Mars</option><option>Avril</option><option>Mai</option><option>Juin</option><option>Juillet</option><option>Aout</option><option>Septembre</option><option>Octobre</option><option>Novembre</option><option>Decembre</option></select>
						<label for="year"> Ann&eacute;e : </label><select name="year"><?php for($i = 2013; $i<=2020; $i++) {echo "<option>";echo $i; echo "</option>";} ?></select>
						<label for="hour"> Heure : </label><select name="hour"><?php for($i=1; $i<24; $i++) {echo "<option>";echo $i; echo "</option>";}?></select>
						<label for="minute">Minute : </label><select name="minute"><?php for($i=00; $i < 60; $i++){echo "<option>";echo $i; echo "</option>";} ?></select>
						<br />
						<input type="submit" value="Ajouter" />
				</div> 
				<div id="bottom">
					
				</div>
			</div>
		</div>
	</body>
	</html>
	<?php
	} ?>
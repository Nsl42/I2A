<?php session_start();


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
				<?php include_once("../controls/display_all.php"); ?>
			</div>
			<div id="aside_right">
				<div id="top">
					<form method="POST" action="../controls/add.php" >
						<h4>Ajouter un lien</h4>
						<label for="title">Titre</label><input type="text" id="title" name="title" />
						<label for="link">Lien</label><input type="text" name="link"  id="link"/>
						<input type="submit" name="Go !" value="Go !" />
					</form>
				</div> 
				<div id="bottom">
				</div>
			</div>
		</div>
	</body>
	</html>
	<?php
	} ?>
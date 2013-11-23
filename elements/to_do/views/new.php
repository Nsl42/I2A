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
		
		</div>
	</body>
	</html>
	<?php
	} ?>
<?php session_start();

if (isset($_SESSION['isconnected']))
{
	/*if($_SESSION['isconnected'])
	{
		?><script type="text/javascript" > window.location="accueil.php"</script><?php 
	}*/}
	?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/design.css" />

	</head>
	<body>
		<div id="connection_box">
			<form method="POST" action="PHP/connect.php">
				<fieldset>
					<h4> Welcome to the I2A </h4>
					
					<div id="mail"><label for="mail"> Mail : </label><input type="text" name="mail" id="mail" /></div>
					<div id="password"><label for="password"> Password : </label><input type="password" name="password" id="password" /><br/><?php if(isset($_GET['e']) AND $_GET['e'] == "403") { echo "<p style='color : red;'> Mot de passe incorrect </p>";} ?></div>
					<a href="lostpass.php">Lost Password ?</a><br/>
					<input type="submit" value="Proceed"> <input type="reset" value="Erase"> 
				</fieldset>
			</form>
		</div>
						
	</body>
	</html>

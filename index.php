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
		<h1> EN TRAVAUX !! </h1>
		<div id="connection_box">
			<form method="POST" action="PHP/connect.php">
				<fieldset><legend>Connexion à l'I2A</legend>
					<label for="mail"> Adresse E-Mail : </label><input type="text" name="mail" id="mail" /><br/>
					<label for="password"> Mot de Passe : </label><input type="password" name="password" id="password" /><br/><?php if(isset($_GET['e']) AND $_GET['e'] == "403") { echo "<p style='color : red;'> Mot de passe incorrect </p>";} ?>
					<a href="lostpass.php">Mot de passe perdu ?</a><br/>
					<input type="submit" value="Connexion !"> <input type="reset" value="Effacer"> 
				</fieldset>
			</form>
		</div>
		<div id="Inscription">
			<span class="ecarte">
				<p><img src="http://fakeimg.pl/150x75/" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan fringilla magna, eu semper mi feugiat eu. Pellentesque facilisis nisi arcu, at hendrerit risus pulvinar vel. Etiam auctor odio id orci sollicitudin pharetra. Integer malesuada, velit ut bibendum tincidunt, nibh libero commodo diam, quis ultricies sem velit id risus. Suspendisse venenatis scelerisque est a ultrices. Praesent sit amet consectetur sapien. Donec sed egestas tortor. Aliquam et mauris eget nibh adipiscing fermentum. Morbi consectetur sapien in lorem vulputate, id iaculis sapien faucibus. Nullam ultricies hendrerit augue, in semper dolor vehicula in. Curabitur non blandit velit. Donec libero turpis, lacinia condimentum velit id, rhoncus porta sapien.</p>
				<p><img src="http://fakeimg.pl/150x100/" /> <ul> <li>Phasellus in ipsum nulla.</li><li>Ut lorem urna</li><li>Tristique eget leo.</li></ul></p>
				<p><img src="http://fakeimg.pl/150x100/" /><img src="http://fakeimg.pl/150x100/" /></p>
			</span>
		</div>
				
	</body>

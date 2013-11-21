<?php session_start();

include_once('tools/user.php'); 
include_once('tools/connection.php');
	  
	  if(isset($_SESSION['is_connected']))
	  {?>
	  	 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/design_accueil.css" />
	</head>
	<body>
		<div id="menutop">
			<div id="name_box">
				
				<img src="<?php echo $_SESSION['photo']; ?>" /><p class="in_menu"><?php echo $_SESSION['nomprenom']; ?></p>
			   
			</div>
			<div id="site_logo">
				<img src="img/icon/sitelogo.png" />
			</div>
			<div id="toolbox">
				<p class="in_menu"><a class="settings" href="settings.php">Param&egrave;tres</a> <a class="deconnect" href="deconnect.php"> Deconnect</a></p>

			</div>
		</div>
		<div id="home">
		<h2> Welcome </h2>
		<hr />
		<div id="external_links"></div><div id="internal_links"></div><div id="schedule"></div>
		<div id="to_do"></div><div id="notepad"></div>
		</div>
	</body>
</html>
<?php } 
	  else{
	  	?><script type="text/javascript" > window.location="index.php"</script><?php 
	  	}
	  ?> 
	  

<?php session_start();

	  
	  if(isset($_SESSION['is_connected']))
	  {?>
	  	 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/design_accueil.css" />
	</head>
	<body>
		<?php include('menutop.php'); ?>
		<div id="home">
		<h2> Welcome </h2>
		<hr />
		<a href="elements/external_link/views/home.php"><div id="external_links"></div></a><div id="internal_links"></div><div id="schedule"></div>
		<a href="elements/to_do/views/new.php"><div id="to_do"></div></a><div id="notepad"></div>
		</div>
	</body>
</html>
<?php } 
	  else{
	  	?><script type="text/javascript" > window.location="index.php"</script><?php 
	  	}
	  ?> 
	  

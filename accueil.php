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
		<?php include('menutop.php'); ?>
		<div id="home">
		<h2> Welcome </h2>
		<hr />
		<div id="external_links"></div><div id="internal_links"></div><div id="schedule"></div>
		<a href="elements/to_do/views/new.php"><div id="to_do"></div></a><div id="notepad"></div>
		</div>
	</body>
</html>
<?php } 
	  else{
	  	?><script type="text/javascript" > window.location="index.php"</script><?php 
	  	}
	  ?> 
	  

<?php
	session_start();
	include("../models/external_link.php");
	$l = new external_link();
	var_dump($_SESSION);
	
		
	if(isset($_POST['title']) && isset($_POST['link']))
	{
		$l->Hydrate("", $_POST['title'], $_POST['link'], $_SESSION['id']);
		$l->add();
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
	else {
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
	?>

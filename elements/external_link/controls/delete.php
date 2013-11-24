<?php
	session_start();
	include("../models/external_link.php");
	$l = new external_link();
	
		
	if(isset($_POST['suppr']))
	{
		foreach($_POST['suppr'] as $key)
		{
			$l->getfromid($key);
			$l->delete();
		}
		
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
	else {
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
	?>
	

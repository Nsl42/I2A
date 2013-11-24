<?php
	session_start();
	include("../models/notepad.php");
	$n = new notepad();
	
		
	if(isset($_POST['suppr']))
	{
		foreach($_POST['suppr'] as $key)
		{
			
			$n->getfromid($key);
			
			$n->delete();
		
		}
		
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
	else {
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
	?>
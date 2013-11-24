<?php
session_start();
	include("../models/notepad.php");
	$n = new notepad();
	
		
	if(isset($_POST['title']) && isset($_POST['content']))
	{
		$n->Hydrate("", $_POST['title'], $_POST['content'], $_SESSION['id']);
		$n->add();
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
	else {
		echo("<script type='text/javascript'>window.location.href='../../../accueil.php';</script>");
	}
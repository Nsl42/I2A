<?php session_start();
   
   include_once('../tools/user.php');
   
   if(isset($_POST['mail']) AND isset($_POST['password']))
   {
   	$user = new user();
	$user->getfrommail($_POST['mail']);
	if($user->checkpassword($_POST['mail'], $_POST['password']))
	{
		$_SESSION['is_connected'] = true;
		$_SESSION['mail'] = $user->getmail();
		$_SESSION['nomprenom'] = $user->getnomprenom();
		$_SESSION['photo'] = $user->getphoto();
		?><script type='text/javascript'> window.location = "../accueil.php"</script> <?php
	}else
		?><script type='text/javascript'> window.location = "../index.php?e=403"</script><?php
   }
   ?>
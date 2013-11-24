<?php
	include_once("C:\\wamp\\www\\I2A\\tools\\user.php");

	$u = new user();
	$u->getfromid($_SESSION['id']);
	$u->fetchallexternals();
	
	?>
		
			<?php
			do
			{
				
				$l = new external_link();
				$l = $u->getallexternals()->getCurrent();
				?>
				<?php echo "<li><INPUT type='checkbox' name='suppr[]' value='".$l->getid()."' /><a href='". $l->gethref()."'>".$l->gettitle()."</a></li>";
				$u->getallexternals()->next();
			}while(!$u->getallexternals()->currentObjIsLast())
			?>
		

<?php
	include_once("C:\\wamp\\www\\I2A\\tools\\user.php");

	$u = new user();
	$u->getfromid($_SESSION['id']);
	$u->fetchallexternals();
	$l = new external_link();
	?>
		
			<?php
			do
			{
				//var_dump($u->getallexternals());
						
	  			$l = $u->getallexternals()->getCurrent();
				echo "<li><INPUT type='checkbox' name='suppr[]' value='".$l->getid()."' /><a target='_blank' href='". $l->gethref()."'>".$l->gettitle()."</a></li>";
				$u->getallexternals()->next();
			}while(!$u->getallexternals()->currentObjIsLast());
			$l = $u->getallexternals()->getCurrent();
			echo "<li><INPUT type='checkbox' name='suppr[]' value='".$l->getid()."' /><a target='_blank' href='". $l->gethref()."'>".$l->gettitle()."</a></li>";
				
			?>
		

<?php
	include_once("C:\\wamp\\www\\I2A\\tools\\user.php");

	$u = new user();
	$u->getfromid($_SESSION['id']);
	$u->fetchallnotes();
	if(!$u->getallnotes()->IsEmpty())
	{
	
	$n = new notepad();
	?>
		
			<?php
			do
			{
	  			$n = $u->getallnotes()->getCurrent();
				echo "<div class='element'><INPUT type='checkbox' name='suppr[]' value='".$n->getid()."' /><h4>".$n->gettitle()."</h4><p>".$n->gettext()."</p></div>";
			
			}while(!$u->getallnotes()->currentObjIsLast());
			$n = $u->getallnotes()->getCurrent();
			echo "<div class='element'><INPUT type='checkbox' name='suppr[]' value='".$n->getid()."' /><h4>".$n->gettitle()."</h4><p>".$n->gettext()."</p></div>";
				
			
	}
	?>
		

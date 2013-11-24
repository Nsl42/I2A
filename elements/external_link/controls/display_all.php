<?php
	include_once("C:\\wamp\\www\\I2A\\tools\\user.php");

	$u = new user();
	$u->getfromid($_SESSION['id']);
	$u->fetchallexternals();
	echo __DIR__;
	?>
		<h4>Liste des liens</h4>
		<ul>
			<?php
			do
			{
				$u->getallexternals()->next();
				$l = new external_link();
				$l = $u->getallexternals()->getCurrent();
				?>
				<?php echo "<li><a href='". $l->gethref()."'>".$l->gettitle()."</a></li>";
				
			}while(!$u->getallexternals()->currentObjIsLast())
			?>
		</ul>
		

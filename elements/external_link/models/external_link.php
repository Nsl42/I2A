<?php
include_once("../../../tools/connection.php");
	class external_link{
	
	private $ID;
	private $TITLE;
	private $HREF;
	private $ID_USER;
	
				/** CONSTRUCTEUR & HYDRATEUR **/
	
	public function __construct()
	{
	}
	
	public function Hydrate($id, $title, $href, $id_user)
	{
		$this->ID = $id;
		$this->TITLE = $title;
		$this->HREF = $href;
		$this->ID_USER = $id_user;
	}
	
				/** ACCESSEURS & MUTATEURS **/
	
	public function getid()
	{
		return $this->ID;
	}
	public function setid($id)
	{
		$this->ID = $id;
	}
	public function gettitle()
	{
		return $this->TITLE;
	}
	public function settitle($title)
	{
		$this->TITLE = $title;
	}	
	public function gethref()
	{
		return $this->HREF;
	}
	public function sethref($href)
	{
		$this->HREF = $href;
	}
	public function getid_user()
	{
		return $this->ID_USER;
	}
	public function setid_user($id_user)
	{
		$this->ID_USER = $id_user;
	}
	
				/** USEFUL FUNCTIONS **/
				
	public function getfromid($id)
{
		/** Vérification de l'id **/
		$c = new Connection();
		$c->connect();
		$answ = $c->Select("Select max(ID) as max from external_link where user_id = ".$_SESSION['id'].";");
		$data = $answ->fetch();
	
		
			if($id <= $data['max'])
			{
		/** récupération **/
		$req = "Select * from external_link where id = " . $id . " and user_id = ".$_SESSION['id'].";";
		//var_dump($req);
			$answ = $c->Select($req);
			$data = $answ->fetch();
		 /** Hydratation **/
		$this->Hydrate($data['id'], $data['title'], $data['href'], $data['user_id']);
	}
}
	
	public function add()
	{
		$c = new Connection();
		$answ = $c->connect();
		echo $this->getid_user();
		$req = "INSERT INTO external_link (title, href, user_id) VALUES ('". $this->gettitle() ."','".$this->gethref()."',".$this->getid_user().");";
		//var_dump($answ);
		$c->exec($req);
		?> <script type="text/javascript">window.alert("Element Added !");</script><?php
	}
	
	public function delete()
	{
	$c = new Connection();
	$answ = $c->connect();
	$req = "DELETE FROM external_link WHERE id = ".$this->getid().";";
	$c->exec($req);
	var_dump($req);
	?> <script type="text/javascript">window.alert("Element Deleted !");</script><?php
	}
	}
?>
		
<<?php
include_once("../../../tools/connection.php");
	class notepad{
	
	private $ID;
	private $TITLE;
	private $TEXT;
	private $ID_USER;
	
				/** CONSTRUCTEUR & HYDRATEUR **/
	
	public function __construct()
	{
	}
	
	public function Hydrate($id, $title, $text, $id_user)
	{
		$this->ID = $id;
		$this->TITLE = $title;
		$this->TEXT = $text;
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
	public function gettext()
	{
		return $this->TEXT;
	}
	public function settext($text)
	{
		$this->TEXT = $text;
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
		$answ = $c->Select("Select max(ID) as max from notepad where user_id = ".$_SESSION['id'].";");
		$data = $answ->fetch();
	
		
			if($id <= $data['max'])
			{
		/** récupération **/
		$req = "Select * from notepad where id = " . $id . " and user_id = ".$_SESSION['id'].";";
		//var_dump($req);
			$answ = $c->Select($req);
			$data = $answ->fetch();
		 /** Hydratation **/
		$this->Hydrate($data['id'], $data['title'], $data['text'], $data['user_id']);
	}
}
	
	public function add()
	{
		$c = new Connection();
		$answ = $c->connect();
		echo $this->getid_user();
		$req = "INSERT INTO notepad (title, text, user_id) VALUES ('". $this->gettitle() ."','".$this->gettext()."',".$this->getid_user().");";
		//var_dump($answ);
		$c->exec($req);
		?> <script type="text/javascript">window.alert("Element Added !");</script><?php
	}
	
	public function delete()
	{
	$c = new Connection();
	$answ = $c->connect();
	$req = "DELETE FROM notepad WHERE id = ".$this->getid().";";
	$c->exec($req);
	var_dump($req);
	?> <script type="text/javascript">window.alert("Element Deleted !");</script><?php
	}
	}
?>
		
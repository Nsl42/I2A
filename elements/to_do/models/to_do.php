<?php 
	//include_once("../../../tools/connection.php");
	//include_once("../../../tools/collection.php");
	//include_once("./item.php");
	
	class to_do{
	
	private $ID;
	private $TITRE;
	private $COMPLETE;
	private $DUE_TIME;
	private $PRIORITY;
	private $USER_ID;
	private $ALL_ITEMS;
	
	
	function __construct()
	{}
	
	public function Hydrate($id, $titre, $complete, $due_time, $priority, $user_id)
	{
		$this->ID = $id;
		$this->TITRE = $titre;
		$this->COMPLETE = $complete;
		$this->DUE_TIME = $due_time;
		$priority->PRIORITY = $priority;
		$user_id->USER_ID = $user_id;
	}
	
		/** Accesseurs & Mutateurs **/
		
		public function getid()
		{
			return($this->ID);
		}
		public function setid($id)
		{
			$this->ID = $id;
		}
		public function gettitre()
		{
			return($this->TITRE);
		}
		public function settitre($titre)
		{
			$this->TITRE = $titre;
		}
		public function getcomplete()
		{
			return($this->COMPLETE);
		}
		public function setcomplete($complete)
		{
			$this->COMPLETE = $complete;
		}
		public function getdue_time()
		{
			return($this->DUE_TIME);
		}
		public function setdue_time($due_time)
		{
			$this->DUE_TIME = $due_time;
		}
		public function getpriority()
		{
			return($this->PRIORITY);
		}
		public function setpriority($priority)
		{
			$this->PRIORITY = $priority;
		}
		public function getuser_id()
		{
			return($this->USER_ID);
		}
		public function setuser_id($user_id)
		{
			$this->USER_ID = $user_id;
		}
		public function getallitems()
		{
			return($this->ALL_ITEMS);
		}
		public function setallitems($all_items)
		{
			$this->ALL_ITEM = $all_items;
		}
	
	/** Useful Functions **/
		public function getfromid($id)
{
		/** Vérification de l'id **/
		$c = new Connection();
		$c->connect();
		$answ = $c->Select("Select max(ID) as max from to_do where user_id = ".$_SESSION['id'].";");
		$data = $answ->fetch();
	
		
			if($id <= $data['max'])
			{
		/** récupération **/
		$req = "Select * from to_do where id = " . $id . " and user_id = ".$_SESSION['id'].";";
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
		echo $this->getuser_id();
		if(is_null($this->getdue_time()))
			$req = "INSERT INTO to_do (title, text, user_id) VALUES ('". $this->gettitle() ."','".$this->gettext()."',".$this->getuserid().");";
		else
			$req = "INSERT INTO to_do (title, text, user_id, due_time) VALUES ('". $this->gettitle() ."','".$this->gettext()."',".$this->getuserid().", ".$this->getdue_time().");";
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
	
	/** Items Function **/
	
	public function fetchallitems()
	{
	$c = new Connection();
	$answ = $c->connect();
	$req="SELECT * FROM item where to_do_id = ". $this->getid() .";";
	$items = new collection();
	while($data = $answ->fetch())
	{
		$i = new item();
		$i->Hydrate($data['id'], $data['label'], $data['due_time'], $data['to_do_id'], $data['priority_id'], $data['status_id']);
		$items->add($i);
	}
	return $items;
	}	
}
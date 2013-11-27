<?php 
	include_once("../../../tools/connection.php");


	
	class item{
	
	private $ID;
	private $LABEL;
	private $DUE_TIME;
	private $TO_DO_ID;
	private $PRIORITY;
	private $STATUS;
	
	
	function __construct()
	{
		$this->setstatus(0);
	}
	
	public function Hydrate($id, $label, $due_time, $to_do_id, $priority, $status)
	{
		$this->ID = $id;
		$this->LABEL = $label;
		$this->DUE_TIME = $due_time;
		$this->TO_DO_ID = $to_do_id;
		$priority->PRIORITY = $priority;
		$user_id->STATUS = $status;
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
		public function getlabel()
		{
			return($this->LABEL);
		}
		public function setlabel($label)
		{
			$this->LABEL = $label;
		}
		public function getdue_time()
		{
			return($this->DUE_TIME);
		}
		public function setdue_time($due_time)
		{
			$this->DUE_TIME = $due_time;
		}
		public function getto_do()
		{
			return($this->TO_DO_ID);
		}
		public function setto_do($to_do_id)
		{
			$this->TO_DO_ID = $to_do_id;
		}
		public function getpriority()
		{
			return($this->PRIORITY);
		}
		public function setpriority($priority)
		{
			$this->PRIORITY = $priority;
		}
		public function getstatus()
		{
			return($this->STATUS);
		}
		public function setstatus($status)
		{
			$this->STATUS = $status;
		}
		
	
	/** Useful Functions **/
	public function getfromid($id)
{
				// Connexion
		$c = new Connection();
		$c->connect();
		
		
				// Fetching data
				
		$req = "Select * from item where id = " . $id . ";";
		//var_dump($req);
			$answ = $c->Select($req);
			$data = $answ->fetch();
		 /** Hydratation **/
		$this->Hydrate($data['id'], $data['label'], $data['due_time'], $data['to_do_id'], $data['priority_id'], $data['status']);
	}	

	
	public function add()
	{
		$c = new Connection();
		$answ = $c->connect();
		if(is_null($this->getdue_time()))
			$req = "INSERT INTO item (label, to_do_id, status) VALUES ('". $this->getlabel() ."','".$this->getto_do()."',".$this->getstatus().");";
		else
			$req = "INSERT INTO item (label, due_time, to_do_id, status) VALUES ('". $this->getlabel() ."','".$this->getdue_time()."',".$this->getto_do()."', ".$this->getstatus(). ");";
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
	
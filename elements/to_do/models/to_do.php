<?php 
	include('../../../tools/connection.php');
	include('../../../tools/collection.php');
	
	class to_do{
	
	private $ID;
	private $TITRE;
	private $COMPLETE;
	private $DUE_TIME;
	private $PRIORITY;
	private $USER;
	private $ALL_ITEMS;
	
	
	public __construct()
	{}
	
	public function Hydrate($id, $titre, $complete, $due_time, $priority, $user)
	{
		$this->ID = $id;
		$this->titre = $titre;
		$this->complete = $complete;
		$this->due_time = $due_time;
		$priority->priority = $priority;
		$user->user = $user;
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
		public function getidue_time()
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
		public function getuser()
		{
			return($this->USER);
		}
		public function setuser($user)
		{
			$this->USER = $user;
		}
	
	/** Useful Functions **/
	
	
		
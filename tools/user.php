<?php
   /**
    * User Class
    * @author Anas Alaoui M'Darhri
    * @version 1.0
    */
    include_once('connection.php');
	include_once('collection.php');
	include_once('C:\\wamp\\www\\I2A\\elements\\external_link\\models\\external_link.php');
	include_once('C:\\wamp\\www\\I2A\\elements\\to_do\\models\\to_do.php');
	include_once('C:\\wamp\\www\\I2A\\elements\\notepad\\models\\notepad.php');
	
class user{
	
	private $ID;
	private $MAIL;
	private $PASS;
	private $NOMPRENOM;
	private $PHOTO;
	private $All_EXTERNALS;
	private $ALL_TODOS;
	private $ALL_NOTES;
	
	
	/**
	 * Constructeur, Hydrateur
	 */
	 
	  function __construct()
	 {
	 	
	 }
	 
	 public function Hydrate($id, $mail, $pass, $nomprenom)
	{
		$this->setid($id);
		$this->setmail($mail);
		$this->setpass($pass);
		$this->setnomprenom($nomprenom);
		
	}
	
	/**
	 * Accesseurs / Mutateurs
	 */
	 
	 public function getid()
	 {
	 	return $this->ID;
	 }
	 public function setid($id)
	 {
	 	$this->ID = $id;
	 }

	 public function getmail()
	 {
	 	return $this->MAIL;
	 }
	 public function setmail($mail)
	 {
	 	$this->MAIL = $mail;
	 }
	 public function getpass()
	 {
	 	return $this->PASS;
	 }
	 public function setpass($pass)
	 {
	 	$this->PASS = $pass;
	 }
	 public function getnomprenom()
	 {
	 	return $this->NOMPRENOM;
	 }
	 public function setnomprenom($nomprenom)
	 {
	 	$this->NOMPRENOM = $nomprenom;
	 }
	 public function getphoto()
	 {
	 	return $this->PHOTO;
	 }
	 public function setphoto($photo)
	 {
	 	$this->PHOTO = $photo;
	 }
	
	 public function getallexternals()
	 {
	 	return $this->All_EXTERNALS;
	 }
	 
	 public function setallexternals($allexternals)
	 {
	 	$this->All_EXTERNALS = $allexternals;
	
	 }
	 public function getalltodos()
	 {
	 	return $this->ALL_TODOS;
	 }
	 public function setallto_dos($allto_dos)
	 {
	 	$this->ALL_TODOS = $allto_dos;
	 }
	  public function getallnotes()
	 {
	 	return $this->ALL_NOTES;
	 }
	 public function setallnotes($allnotes)
	 {
	 	$this->ALL_NOTES = $allnotes;
	 }
	 /**
	  * Useful Functions
	  */
	  
	  public function getfromid($id)
	  {
	  	$connection = new connection();
		$answ = $connection->Select("SELECT * FROM user WHERE id = ".$id.";");
		$data = $answ->fetch();
		$this->setmail($data['mail']);
		$this->setpass($data['password']);
		$this->setphoto($data['picture']);
		$this->setnomprenom($data['nom'] . ' '. $data['prenom']);
		$this->setid($data['id']);
		
	  }
	  
	  public function getfrommail($mail)
	  {
	  	$connection = new connection();
	
		$answ = $connection->Select("SELECT * FROM user WHERE mail = '".$mail."';");
		$data = $answ->fetch();
		$this->setmail($data['mail']);
		$this->setpass($data['password']);
		$this->setphoto($data['picture']);
		$this->setnomprenom($data['nom'] . ' '. $data['prenom']);
		$this->setid($data['id']);
		
	  }
	  

	  public function checkpassword($mail, $password)
	  {
	  	$mail = trim($mail);
		$password = trim($password);
		$MAIL = trim($this->getmail());
		$PASSWORD = trim($this->getpass());
		$ret = false;
		if($MAIL == $mail AND $password == $PASSWORD)
		{
			$ret = true;
		}
		return $ret;
	  }
	    /** External Links **/
	    
	    public function fetchallexternals()
		{
			$c  = new connection();
			$answ= $c->Select("SELECT * FROM external_link where user_id = ".$this->getid().";");
			$externals = new Collection();
			while($data = $answ->fetch())
			{
				$l = new external_link();
				$l->Hydrate($data['id'], $data['title'], $data['href'], $data['user_id']);
				$externals->add($l);				
			}
			$this->setallexternals($externals);
		}
		
		/** Notepad **/
		
		public function fetchallnotes()
		{
			$c = new connection();
			$answ = $c->Select("SELECT * FROM notepad where user_id=".$this->getid().";");
			$notes = new Collection();
			while($data = $answ->fetch())
			{
				$n = new notepad();
				$n->Hydrate($data['id'], $data['title'], $data['text'], $data['user_id']);
				$notes->add($n);
			}
			$this->setallnotes($notes);
		}
	  
	  
}
?>
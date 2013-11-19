<?php
   /**
    * User Class
    * @author Anas Alaoui M'Darhri
    * @version 1.0
    */
    include_once('connection.php');
	
class user{
	
	private $ID;
	private $MAIL;
	private $PASS;
	private $NOMPRENOM;
	private $PHOTO;
	
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
	 /**
	  * Useful Functions
	  */
	  
	  public function getfromid($id)
	  {
	  	$connection = new connection();
		$connection->connect();
		$answ = $connection->Select("SELECT * FROM user WHERE id = ".$id.";");
		$data = $answ->fetch();
		$this->setmail($data['mail']);
		$this->setpass($data['pass']);
		$this->setphoto($data['picture']);
		$this->setnomprenom($data['nom'] . ' '. $data['pnom']);
		
	  }
	  
	  public function getfrommail($mail)
	  {
	  	$connection = new connection();
		$answ = $connection->Select("SELECT * FROM user WHERE mail = '".$mail."';");
		$data = $answ->fetch();
		$this->setmail($data['mail']);
		$this->setpass($data['password']);
		$this->setphoto($data['picture']);
		$this->setnomprenom($data['nom'] . ' '. $data['pnom']);
		
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
	  
	  
}
?>
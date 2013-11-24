<?php
/** 
 * Classe Connection pour l'I2A
 * 
 * @author Anas Alaoui M'Darhri <nslmdrhr@gmail.com>
 * @version 1.0
 */
 
 
    class connection{
    
		const HOST = 'localhost';
    	const DB = 'I2A';
		const USER = 'root';
		const PASSWORD = '';
		private $IS_CONNECTED;
		private $C;
		
		private function is_connected()
		{
			return $this->IS_CONNECTED;
		}
		private function getc()
		{
			return $this->C;
		}
		private function setc($c)
		{
			$this->C = $c;
		}
		
		/** Constructeur, Hydrateur **/
		
		function __construct()
		{if($this->is_connected())
		{
		
		}
		else
		 $this->connect();
		}
		
			
		/**
		 * Connection function
		 * 
		 */
		 public function connect()
		 {
		 	try{
		 	$dns = 'mysql:host='.$this::HOST.';dbname='.$this::DB.';';
			$this->setc(new PDO( $dns, $this::USER, $this::PASSWORD));
			$this->IS_CONNECTED = TRUE;
			}
			catch ( Exception $e ) {
			  echo "Connection à MySQL impossible : ", $e->getMessage();
			  die();
									 }	
		 }
		 
		 /**
		  * Select function, used to do the select request to the database
		  * @param $req Sql Request
		  * 
		  */
		  
		 public function Select($req)
		 {
		 	
			
			$ans = $this->getc()->query($req);
		 	//var_dump($req);
		 	return $ans;
		
   		 }
		 
		 public function exec($req)
		 {
			$this->getc()->exec($req);
		 //var_dump($req);
		 }
		 }
   		 
?>
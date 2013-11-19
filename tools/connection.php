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
		
		private function is_connected()
		{
			return $this->IS_CONNECTED;
		}
		
		/** Constructeur, Hydrateur **/
		
		function __connection()
		{$this->IS_CONNECTED = FALSE;}
		
			
		/**
		 * Connection function
		 * 
		 */
		 private function connect()
		 {
		 	try{
		 	$dns = 'mysql:host='.$this::HOST.';dbname='.$this::DB.';';
			$connection = new PDO( $dns, $this::USER, $this::PASSWORD);
			return $connection;
			$this->IS_CONNECTED = TRUE;}
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
		 	$connection = $this->connect();
			$ans = $connection->query($req);
		 	
		 	return $ans;
		
   		 }
		 
		 }
   		 
?>
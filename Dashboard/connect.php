<?php 

	/* 
	Configuration

	*/
 
	 $DB_SERVER = "localhost"; 
	 $DB_USER = "root"; 
	 $DB_PASS = ""; 
	 $DB_DATABASE = "tresorerie"; 

/******************************************************************/
 
	 try { 
	 $connect =  new PDO("mysql:host=$DB_SERVER; dbname=$DB_DATABASE", $DB_USER,$DB_PASS); 
	 } 
 
	 catch (PDOException $e) { 

	 	if (empty($DB_DATABASE)) {
	 		die("<strong>Erreur de connection de base de donées..! </strong><a href='install'>Start installation</a>") ;
	 	} else {
	 		die("<strong>Database Error..! </strong>") ;
	 	}
	 	 
	 } 
 
	 $connect->query("set charcter_set_server = 'utf8'"); 
	 $connect->query("set names'utf8' "); 
	 	
 
?>
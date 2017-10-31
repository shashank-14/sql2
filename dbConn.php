<?php
class dbConn{
 
protected static $db;

  private function __construct() {
   
   try {
   self::$db = new PDO( 'mysql:host=sql2.njit.edu;dbname=sp2339', 'sp2339', '3vmVNRsN' );
   self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   echo 'Connection Successful';
   }
   catch (PDOException $e) {
   
   echo "Connection Error: " . $e->getMessage();
   }
    
    }
?>
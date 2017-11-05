<?php
define('DATABASE', 'sp2339');
define('USERNAME', 'sp2339');
define('PASSWORD', '3vmVNRsN');
define('CONNECTION', 'sql2.njit.edu');

class dbConn{
 
protected static $db;

  public function __construct() {
   
   try {
   self::$db = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
   self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   echo 'Connection Successful';
   echo '<br>';
   }
   catch (PDOException $e) {
   echo "Connection Error: " . $e->getMessage();
   }
    
  }
    
  public static function getConnection() {
    if (!self::$db) {
      new dbConn();
    }
      return self::$db;
      }
}

?>
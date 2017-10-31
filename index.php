<?php
$dsn = 'mysql:dbname=sp2339;host=sql2.njit.edu';
$user = 'sp2339';
$password = '3vmVNRsN';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'Connection Successful';
} 
catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}


?>
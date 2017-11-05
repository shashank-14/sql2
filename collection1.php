<?php
include 'dbConn.php';

class collection{

public function __construct(){
  $class1=get_called_class();
  $this->search(6,$class1);
}	
	
public function search($count,$class1){
    $db=dbConn::getConnection();
    $sql = 'SELECT * FROM '.$class1.' where id< :count1';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':count1', $count);
    $stmt->execute();	
    $rows=$stmt->rowCount();
    echo 'Row count= '.$rows;
    echo '<br>';
    $rowtotal=$stmt->fetchALL(PDO::FETCH_ASSOC);
    echo "<table border=2>";
    $this->displayHeader($class1);
    $this->displayTable($rowtotal);
    echo "</table>";
  }

public function displayHeader($class1){
  $db1=dbConn::getConnection();
  $sql1 = 'SHOW COLUMNS FROM '.$class1;
  $stmt1 = $db1->prepare($sql1);
  $stmt1->execute();
  $headers=$stmt1->fetchAll(PDO::FETCH_COLUMN);
  
  foreach($headers as $col){
        echo "<td>$col</td>";
        }    
    }
   
public function displayTable($e){

    foreach( $e as $row) {
      echo "<tr>";
      foreach($row as $col){
        echo "<td>$col</td>";
        }
        echo "<tr>";
      }    
    }
}
class accounts extends collection{
	
	

}
?>
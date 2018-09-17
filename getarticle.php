<?php

$id=$_GET['id'];
include 'common/con.php';
  
 $id=$_GET['id'];
 
  
 
  $sql = 'SELECT * , DATE_FORMAT(date, "%e %b") as datetxt from Articles where id='.$id;
  
$result = $conn->query($sql);
  
  $row=$result->fetch_assoc();
// getting random 2 articles

echo json_encode($row);
  

?>
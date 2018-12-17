<?php

$id=$_GET['id'];
include 'common/con.php';
include 'common/common.php';
  
 $id=$_GET['id'];
 
  
 
  $sql = 'SELECT * , DATE_FORMAT(date, "%e %b") as datetxt from Articles where id=?';
  $stmt=$conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->store_result();

  $row=fassoc($stmt);
$stmt->close();
// getting random 2 articles

echo json_encode($row);
  

?>

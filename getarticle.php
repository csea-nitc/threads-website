<?php

$id=$_GET['id'];
include 'common/con.php';
  
 $id=$_GET['id'];
$sql="UPDATE `Articles` SET viewcount = viewcount +1 WHERE id =$id";
  
$result = $conn->query($sql);
  $sql = "SELECT * from Articles where id=$id";
  
$result = $conn->query($sql);
  
  $row=$result->fetch_assoc();
// getting random 2 articles

echo json_encode($row);
  

?>
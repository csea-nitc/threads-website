<?php

$id=$_GET['id'];
include 'common/con.php';
  
 $id=$_GET['id'];
$sql = "SELECT title,authorname,id from Articles where visible=1 and editionid=$id order by reorder";
  
$result = $conn->query($sql);
  $a=array();
  while($row=$result->fetch_assoc())
  {
    array_push($a,$row);
  }
  $conn->close();
echo json_encode($a);

?>
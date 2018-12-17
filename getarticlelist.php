<?php

$id=$_GET['id'];
include 'common/con.php';
include 'common/common.php';
  
 $id=$_GET['id'];
$sql = "SELECT title,authorname,id from Articles where visible=1 and editionid=? order by reorder";
  $stmt=$conn->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->store_result();
  $a=array();
  while($row=fassoc($stmt))
  {
    array_push($a,$row);
  }
$stmt->close();
  $conn->close();
echo json_encode($a);

?>

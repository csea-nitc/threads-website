<?php

include 'common/con.php';
  
$sql = "SELECT * from edition where visible=1 order by id desc";
  
$result = $conn->query($sql);
  $a=array();
  while($row=$result->fetch_assoc())
  {
    array_push($a,$row);
  }
  $conn->close();
echo json_encode($a);

?>
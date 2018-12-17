<?php

$arr=$_POST["data"];
include '../common/con.php';
  $c=0;    
foreach($arr as $id)
{
  $sql = "UPDATE `Articles` SET `reorder`=$c WHERE id=$id";
  
$result = $conn->query($sql);
  $c=$c+1;
  
}

?>
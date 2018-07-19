<?php

include '../common/con.php';
 $id=$_POST["id"];
  $sql = "UPDATE `edition` SET `visible`=1-visible WHERE id=$id";
  
$result = $conn->query($sql);
?>
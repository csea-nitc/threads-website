​<?php

 
if(isset($_GET['id']))
{
 
include 'common/con.php';  
  $id=$_GET['id'];
$a1=$_GET['alerttype'];

 // getting query from
$sql = "INSERT INTO subscription(emailid,alerttype)  VALUES    ('$id',$a1) ON DUPLICATE KEY UPDATE alerttype=$a1";
  
$result = $conn->query($sql); 
 $conn->close();
 
 
 
   
  
}

 

?>

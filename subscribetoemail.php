<?php

 
if(isset($_GET['id']))
{
 
include 'common/con.php';  
  $id=$_GET['id'];
$a1=$_GET['alertarticle'];
$a2=$_GET['alertedition']; 
 // getting query from db
$sql = "INSERT INTO subscription(emailid,articleAlert,editionAlert)  VALUES    ('$id',$a1,$a2) ON DUPLICATE KEY UPDATE articleAlert=$a1,editionAlert=$a2";
  
$result = $conn->query($sql); 
 $conn->close();
 
 
 
   
  
}

 

?>

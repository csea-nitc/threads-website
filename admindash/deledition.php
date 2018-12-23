<?php


// remove above lines to delete edition 



if(isset($_GET['id']))
{
 
include '../common/con.php';  
  $id=$_GET['id'];
 // getting query from db
$sql = "DELETE FROM `edition` WHERE id='$id'";
 
 
 // TODO delete folder also 
 
 
$result = $conn->query($sql);
  $sql = "DELETE FROM `Articles` WHERE editionid='$id'";
  
$result = $conn->query($sql);
 $conn->close();
 
  
 header('Location:manage.php');
  
  
}



 header('Location:manage.php');

?>

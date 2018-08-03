<?php


include '../common/con.php';

$id=$_GET['id'];

$sql="UPDATE `edition` SET `pdflink`='nil' WHERE id=$id";
$ed = $conn->query($sql);
header("Location:editedition.php?id=$id");

 
?>
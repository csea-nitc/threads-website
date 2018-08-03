<?php
include "common/con.php";

$id=$_GET['id'];
$sql="select * from uploads where id=$id";
$r=$conn->query($sql);
$row=$r->fetch_assoc();

$filename=$row["path"];
  $nd=mime_content_type($filename);

header("Content-type: $nd");
  header('Content-Length: ' . filesize($filename));
readfile($filename);


?>
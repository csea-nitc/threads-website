
<?php

  include '../common/con.php';
  $aname=$_POST['authorname'];
  $abio=$_POST['authorbio'];
  $photourl=$_POST['authorphoto'];
  $title=$_POST['title'];
$artdate=$_POST['artdate'];
$minutes=$_POST['minutes'];
$eid=$_POST['eid'];
  $content=$_POST['content'];
 if($_POST['mode']=='create'){
$sql = "INSERT INTO `Articles`( `editionid`, `title`, `content`, `authorname`, `authorshortbio`, `authorphoto`,`date`,`minutes`) VALUES (?,?,?,?,?,?,date_format(?, '%Y-%m-%d'),?)";
$stmt = $conn->prepare($sql);

   $stmt->bind_param("issssssi",$eid,$title,$content,$aname,$abio,$photourl,$artdate,$minutes);
 $stmt->execute();
 }
else{
  $sql = "UPDATE Articles SET title=?,content=?,date=date_format(?, '%Y-%m-%d'),authorname=?,authorshortbio=?,authorphoto=?,minutes=? WHERE id=".$_POST['aid'];
$stmt = $conn->prepare($sql);

   $stmt->bind_param("ssssssi",$title,$content,$artdate,$aname,$abio,$photourl,$minutes);
  $stmt->execute();

}
// /echo $sql;
//die();



 echo mysqli_error($conn);

$conn->close();


?>


<?php

  include '../common/con.php';
  $aname=$_POST['authorname'];
  $abio=$_POST['authorbio'];
  $photourl=$_POST['authorphoto'];
  $title=$_POST['title']; 
$artdate=$_POST['artdate'];
$eid=$_POST['eid'];
  $content=$_POST['content'];
 if($_POST['mode']=='create'){
$sql = "INSERT INTO `Articles`( `editionid`, `title`, `content`, `authorname`, `authorshortbio`, `authorphoto`,`date`) VALUES (?,?,?,?,?,?,date_format(?, '%Y-%m-%d'))";
$stmt = $conn->prepare($sql);
   
   $stmt->bind_param("issssss",$eid,$title,$content,$aname,$abio,$photourl,$artdate);
 $stmt->execute();
 }
else{
  $sql = "UPDATE Articles SET title=?,content=?,date=date_format(?, '%Y-%m-%d'),authorname=?,authorshortbio=?,authorphoto=? WHERE id=".$_POST['aid'];
$stmt = $conn->prepare($sql);

   $stmt->bind_param("ssssss",$title,$content,$artdate,$aname,$abio,$photourl);
  $stmt->execute();
  
}
// /echo $sql;
//die();
 
 
 
 echo mysqli_error($conn);
 
$conn->close();


?>
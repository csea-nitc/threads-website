
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
$sql = "INSERT INTO `Articles`( `editionid`, `title`, `content`, `authorname`, `authorshortbio`, `authorphoto`,`date`) VALUES ('$eid','$title','$content','$aname','$abio','$photourl',date_format('$artdate', '%Y-%m-%d')) ";
 }
else{
  $sql = "UPDATE Articles SET title='$title',content='$content',date=date_format('$artdate', '%Y-%m-%d'),authorname='$aname',authorshortbio='$abio',authorphoto='$photourl' WHERE id=".$_POST['aid'];
}
// /echo $sql;
//die();
 
$result = $conn->query($sql);
 
$conn->close();


?>

<?php

  include '../common/con.php';
  $aname=$_POST['authorname'];
  $abio=$_POST['authorbio'];
  $photourl=$_POST['photourl'];
  $title=$_POST['title'];
$eid=$_POST['eid'];
  $content=$_POST['content'];
 if($_POST['mode']=='create'){
$sql = "INSERT INTO `Articles`( `editionid`, `title`, `content`, `authorname`, `authorshortbio`, `authorphoto`) VALUES ('$eid','$title','$content','$aname','$abio','$photourl') ";
 }
else{
  
  $sql = "UPDATE Articles SET title='$title',content='$content',authorname='$aname',authorshortbio='$abio',authorphoto='$photourl' WHERE id=".$_POST['aid'];
}
$result = $conn->query($sql);
var_dump($result);
$conn->close();


?>
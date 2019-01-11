<?php


include '../common/con.php';



    $sql = "SELECT * from subscription";
  
$result = $conn->query($sql);
$txt="";
 while($row=$result->fetch_assoc() ) {

echo $row["emailid"].",".$row["alerttype"]."\n";





}


?>

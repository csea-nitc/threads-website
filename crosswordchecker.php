<?php
$ans=$_POST["ans"];

$ans=strtolower($ans);
//add answer here 
if(md5($ans)=="85d019e7fcd881ca75d586e23cdd84b5")

{echo "correct";}
else{
echo "wrong";
}
?>

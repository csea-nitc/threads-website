<?php
$ans=$_POST["ans"];

$ans=strtolower($ans);
//add answer here 

/*

code to get hash 

php -r "echo md5(strtolower('  <answer> '));"

*/
if(md5($ans)=="c99f7ca5af7626d14dca3516559f42a6")

{echo "correct";}
else{
echo "wrong";
}
?>

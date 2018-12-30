<?php
$ans=$_POST["ans"];

$ans=strtolower($ans);
//add answer here 

/*

code to get hash 

php -r "echo md5(strtolower('  <answer> '));"

*/
if(md5($ans)=="4a49e34155a3da15ccbb17fd411e205c")
{echo "correct";}
else{
echo "wrong";
}
?>

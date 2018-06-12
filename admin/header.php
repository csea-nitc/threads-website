
<?php
// Set session variables
session_start();
if($_SESSION["isadmin"] !="true")
{
  header("Location:index.php");
  
}

?>
 <link rel="stylesheet" type="text/css" href="style.css">






<div class="centerthings">
  <a href="manage.php" >dashboard |</a>
  <a href="logout.php">Logout</a>
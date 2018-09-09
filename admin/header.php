
<?php
// Set session variables
session_start();
if($_SESSION["isadmin"] !="true")
{
  header("Location:index.php");
  
}

?>
<html>
  
  <head>
 <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 

<body>
  

<div class="centerthings">
  <a href="manage.php" >dashboard |</a>
  <a href="logout.php">Logout</a>
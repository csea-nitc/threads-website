

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
  
  
   include '../common/con.php';
  
  
  
  $username=$_POST['name'];
   
  
// getting query from db
$sql = "INSERT INTO `edition`( `name`) VALUES ('".$username."')";
  
$result = $conn->query($sql);
 $conn->close();
header("Location:manage.php");





}
else{

?>





<html>
  
  
  <body>
    <h1>
      Admin Login
    </h1>
    
    <form action="addedition.php" method="POST">
      Edition NAme:<input type="text" name="name" required><br>
     
      <input type="submit" value="ADD!"></input>
      
    </form>
  </body>
</html>

<?php
}
  ?>
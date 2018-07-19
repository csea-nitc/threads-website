

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
  
  
   include '../common/con.php';
  
  
  
  $username=$_POST['name'];
   $edname=str_replace(' ', '', $username);
 var_dump( mkdir("../assets/$edname"));
  
  mkdir("../assets/$edname/images");
  
  mkdir("../assets/$edname/videos");
  
  
  mkdir("../assets/$edname/documents");
  
  mkdir("../assets/$edname/others");
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
      Create Edition
    </h1>
     <?php
    include 'header.php';
    
    ?>
    
    <form action="addedition.php" method="POST">
      Edition NAme:<input type="text" name="name" required><br>
     
      <input type="submit" value="ADD!"></input>
      
    </form>
  </body>


<?php include 'footer.php';?>
</html>

<?php
}
  ?>
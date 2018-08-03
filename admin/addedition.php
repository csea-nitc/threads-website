

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
  
  
   include '../common/con.php';
  
  
  
  $username=$_POST['name'];
  $year=$_POST['year'];
   $edname=str_replace(' ', '', $username);
 var_dump( mkdir("../assets/$edname",0777,true));
  
  mkdir("../assets/$edname/images",0777,true);
  
  mkdir("../assets/$edname/videos",0777,true);
    
  mkdir("../assets/$edname/pdfs",0777,true);
  
  
  mkdir("../assets/$edname/others",0777,true);
// getting query from db
   
$sql = "INSERT INTO `edition`( `name`,`year`) VALUES ('".$username."','".$year."')";
  
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
      Edition NAme:<input type="text" name="name" placeholder="AUG (...in capital)" required><br>
        Edition Year:<input type="text" name="year" Placeholder="2018" required><br>
      <input type="submit" value="ADD!"></input>
      
    </form>
  </body>


<?php include 'footer.php';?>
</html>

<?php
}
  ?>
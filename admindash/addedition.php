

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{ 
   include '../common/con.php';
  $username=$_POST['name'];
  $year=$_POST['year'];
   $edname=str_replace(' ', '', $username.$year);
  mkdir("../assets/$edname",0777,true);
  
  mkdir("../assets/$edname/images",0777,true);
  
  mkdir("../assets/$edname/videos",0777,true);
    
  mkdir("../assets/$edname/pdfs",0777,true);
  
  
  mkdir("../assets/$edname/others",0777,true);
// getting query from db
   $month=array("JAN"=>1,"FEB"=>2,"MAR"=>3,"APR"=>4,"MAY"=>5,"JUN"=>6,"JUL"=>7,"AUG"=>8,"SEP"=>9,"OCT"=>10,"NOV"=>11,"DEC"=>12);
$sql = "INSERT INTO `edition`( `name`,`year`,`month`) VALUES ('".$username."','".$year."',".$month[$username].")";

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
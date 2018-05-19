

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  
  
  
   include '../common/con.php';
  
  
  
  $username=$_POST['username'];
  $password=$_POST['password'];
  
// getting query from db
$sql = "SELECT * from admins where name='".$username."' and password='".$password."'";
  
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  //redirect to manage.php adminpage
  header('Location:manage.php');
  
  
  
  
  
}
  else{
    //auth failed  redirect to same page
    
    header('Location:index.php');
    
    
  }
}






else{

?>





<html>
  
  
  <body>
    <h1>
      Admin Login
    </h1>
    
    <form action="index.php" method="POST">
      Username:<input type="text" name="username" required><br>
      Password:<input type="password" name="password" required></br>
      <input type="submit" value="Login"></input>
      
    </form>
  </body>
</html>

<?php
}
  ?>
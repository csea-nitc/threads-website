<?php


if(isset($_POST['submit']))
{
  
  include "../common/con.php";
  $url=$_POST["pdflink"];
  $id=$_POST["id"];
  $sql="update edition set pdflink='$url' where id=$id";
 
  $conn->query($sql);
 
  header("Location:editedition.php?id=$id");
  die();
  
  
  
  
}

?>

<html>
  
  
  
  <body>
    
<h1>Add or Update PDF</h1>
 
  
  
<form action="addpdf.php" method="post" enctype="multipart/form-data">
  
URL to pdf:<input type="text" name="pdflink" placeholder="Paste Link here" ></br>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<input type="submit" name="submit" ></br>  
</form>

</body>
</html>

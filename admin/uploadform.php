
<!DOCTYPE html>
<html>
<body>

<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    include '../common/con.php';
  $type=$_POST["type"];
    $name=$_POST["name"];
    $edid=$_POST["edid"];
    $sql="SELECT name from edition where id=$edid";
  $result=$conn->query($sql);
  $row= $result->fetch_assoc();
  $editionfolder= str_replace(' ', '', $row["name"]);
  $target_dir = "/assets/".$editionfolder; // generatye from edition name
  if($type=="Image")
  {
    $subfolder="/images/";
  }
  else if($type=="Video"){
    
    $subfolder="/videos/";
  }
  else{
    
    $subfolder="/others/";
    
  }
$target_file = $target_dir.$subfolder. basename($_FILES["fileToUpload"]["name"]);

  
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
  $filepath=$target_file;
    
    
     $sql="INSERT INTO `uploads`(`path`, `edid`, `name`, `type`) VALUES ($filepath,$edid,$name,$type)";
  $conn->query($sql);
    
  
  } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
  
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <?php
    include 'header.php';
    
    ?>
    
    <h1>Admin panel</h1>
 
    <table>
     <tr> <th>Name</th><th> LINK</th></tr>
   
    <?php
      include '../common/con.php';
    $sql = "SELECT * from uploads";
  
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
      ?>
    
    <tr><td><?php echo $row['name'] ?></td><td><a href="/file.php?id=<?php echo $row['id']; ?>">file.php?id=<?php echo $row['id']; ?></a> </td>   </tr>
    
    
    <?php
 
  
  }
  
  
} ?>
      </table>
 
  
  
<form action="uploadform.php" method="post" enctype="multipart/form-data">
  
  Name:<input type="text" name="name" ></br>
  Type:
  <input type="radio" name="type" value="Image" checked>Images<br>
  <input type="radio" name="type" value="Video"> Videos<br>
  <input type="radio" name="type" value="Other"> Other<br><br>
  <input type="hidden" name="edid" value="<?php echo $_GET["id"]; ?>" >
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  
</form>

</body>
</html>

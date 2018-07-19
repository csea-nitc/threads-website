<html>
  
  <body>
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
 
 
<?php include 'footer.php';?>
  </body>
</html>
<html>
  
  <body>
    
     <?php
    include 'header.php';
    
    ?>
    
    <h1>Admin panel</h1>
 
    <table>
     <tr> <th>Edition</th><th>EDIT?</th><th>DELETE?</th></tr>
   
    <?php
      include '../common/con.php';
    $sql = "SELECT * from edition";
  
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
      ?>
    
    <tr><td><?php echo $row['name'] ?></td><td><a href="editedition.php?id=<?php echo  $row['id'] ?>" >EDIT</a></td>
     <td><a href="deledition.php?id=<?php echo $row['id'] ;?>" >DELETE</a></td>
         </tr>
    
    
    <?php
 
  
  }
  
  
} ?>
      </table>
    
   
    
   <div class="button">
        <a href="addedition.php">Add Edition</a> 
   
    </div>
        
<?php include 'footer.php';?>
  </body>
</html>
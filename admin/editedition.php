<html>
  
  <body>
    
    <?php
    include 'header.php';
    $id=$_GET['id'];
    ?>
    
    <h1>Edit Edition</h1>
 <a href="reorderarticles.php?id=<?php echo $id; ?>" >Reorder articles</a>
 <a href="uploadform.php?id=<?php echo $id; ?>" >Upload Resources</a>
    
    
    <table>
     <tr> <th>Title</th><th>Author Name</th><th>delete?</th><th>edit?</th></tr>
   
    <?php
      include '../common/con.php';
      $id=$_GET['id'];
    $sql = "SELECT * from Articles where editionid=$id";
  
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
   
      ?>
    
    <tr><td><?php echo $row['title'] ?></td><td><?php echo $row['authorname'] ?></td><td><a href="editarticle.php?mode=edit&eid=<?php echo $_GET['id']; ?>&id=<?php echo  $row['id'] ?>" >EDIT</a></td>
      <td><a ><td><a href="delarticle.php?id=<?php echo $row['id'] ;?>" >DELETE</a></td>
         </tr>
    
    
    <?php
 
  
  }
}
  else{
    
    ?>
        
        <h1>
          NO articles added
        </h1>
        <?php
    
  }
  
  
 ?>
      </table>
    
   
    
   
       <div class="button">
          <a href="editarticle.php?mode=create&eid=<?php echo $_GET['id'] ?>">Add Article</a> 
        
        </div> 
       
     
      
  </body>
</html>
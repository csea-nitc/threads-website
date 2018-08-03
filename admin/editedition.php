<html>
  
  <body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <?php
    include 'header.php';
    
    include '../common/con.php';
      $id=$_GET['id'];
    $sql = "SELECT * from edition where id=$id";
    $result = $conn->query($sql);
    $edrow = $result->fetch_assoc();
      
  
    ?>
    
    <h1>Edit Edition</h1>
 <a href="reorderarticles.php?id=<?php echo $id; ?>" >Reorder articles</a>
 <a href="uploadform.php?id=<?php echo $id; ?>" >Upload Resources</a>
    
    <?php
   if($edrow["pdflink"]=="nil"){?>
    <a href="addpdf.php?id=<?php echo $id; ?>">Upload PDF</a>
    <?php 
                              }
    else{
    ?>
       <a href="addpdf.php?id=<?php echo $id; ?>">Update PDF</a>
       <a href="removepdf.php?id=<?php echo $id; ?>">Remove PDF</a>
   <?php } ?>
    
    <table>
      <tr> <th>Title</th><th>Author Name</th><th>Edit?</th><th>Delete?</th><th>Visibility</th></tr>
   
    <?php
 
     
    $sql = "SELECT * from Articles where editionid=$id";
  
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
   
      ?>
    
    <tr><td><?php echo $row['title'] ?></td><td><?php echo $row['authorname'] ?></td><td><a href="editarticle.php?mode=edit&eid=<?php echo $_GET['id']; ?>&id=<?php echo  $row['id'] ?>" >EDIT</a></td>
      <td><a href="delarticle.php?id=<?php echo $row['id'] ;?>" >DELETE</a></td><td><input type="checkbox" <?php if($row["visible"]==1) {echo "checked";} ?> name="visible" onclick="svm(<?php echo  $row['id'];?>)" value="1" /></td>
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
     <script> 
    function svm(id){
      
        $.post("editionSetvisibility.php",{id:id}, function(data, status){
          
    });
    }       
    </script>
   
    
   
       <div class="button">
          <a href="editarticle.php?mode=create&eid=<?php echo $_GET['id'];?>">Add Article</a> 
        
        </div> 
       
     
      
  </body>
</html>
<html>
  
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <?php
    include 'header.php';
    
    ?>
    
    <h1>Admin panel</h1>
 <a href="downloadsubscribers.php" download="subscriberlist.csv" >Download Subscribers List </a>
    <table>
     <tr> <th>Edition</th><th>EDIT?</th><th>DELETE?</th><th> VISIBILITY</th></tr>
   
    <?php
      include '../common/con.php';
    $sql = "SELECT * from edition";
  
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
      ?>
    

    <tr><td><?php echo $row['name'] ?></td><td><a href="editedition.php?id=<?php echo  $row['id'] ?>" >EDIT</a></td>
     <td><a onclick="return confirm_click();" href='deledition.php?id=<?php echo $row['id'] ;?>'>DELETE</a></td><td><input type="checkbox" <?php if($row["visible"]==1) {echo "checked";} ?> name="visible" onclick="svm(<?php echo  $row['id'] ?>)" value="1" /></td>

         </tr>
    
    
    <?php
 
  
  }
  
  
} ?>
      </table>
    
   <script> 
         function confirm_click()
{
return confirm("Are you sure you want to delete?");
}      
    function svm(id){
      
        $.post("setvisibilitymode.php",{id:id}, function(data, status){
          
    });
    }  
    
     function confirm_click()
{
return confirm("Are you sure you want to delete?");
}           
    </script>
    
   <div class="button">
        <a href="addedition.php">Add Edition</a> 
   
    </div>
        
<?php include 'footer.php';?>
  </body>
</html>

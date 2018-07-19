<html>
  
  <body>
    <script src="/js/Sortable.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <?php
    include 'header.php';
    
    ?>
    
    <h1>Edit Edition</h1>
 
   <ul id="items">
	
   
    <?php
      include '../common/con.php';
      $id=$_GET['id'];
    $sql = "SELECT * from Articles where editionid=$id order by reorder";
  
    
    
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
   
      ?>
    
   <li artid="<?php echo $row["id"]; ?>">
     
     <?php echo $row['title'] ?></li>
        
    
    
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
    
   </ul>  
   
      <div onclick="submitorder();">
        Save Order
    </div>
     <script>
    var el = document.getElementById('items');
var sortable = Sortable.create(el);
    function submitorder()
       {
         
         //
         order=[];
         $("li").each(function(index){
           
          order.push($(this).attr("artid"));
           
         });
        $.post("setorder.php",{data:order}, function(data, status){
          
    });
         
       }
       
    </script>
      
  </body>
</html>
<html>
  
  
  
  <body>
  <link href="/styles/style.css" rel="stylesheet">
    <?php
    include 'headerbanner.php';
    ?>


  
   <div class="editionlist">
  <?php
  include 'common/con.php';
  
 
$sql = "SELECT * FROM  edition where visibility=1";
$result = $conn->query($sql);

while($row=$result->fetch_assoc())
{
  
  ?>
 
     <a href="/edition/?id=<?php echo $row["id"];?>"> 
    <div class="editionbox">
          <span class="editionname">
    <?php  echo $row["name"]; ?>
 </span></div></a>

        
      
 
  <?php
}
  
  ?>
   </div>
      </body>
</html>

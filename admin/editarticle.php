<?php


$titleval="";
$contentval="";
$abio="";
$aval="";

$photourl="";
include 'header.php';

if(isset($_GET['id']))
{
  
 include '../common/con.php';
  
 $id=$_GET['id'];
$sql = "SELECT * from Articles where id=$id";
  
$result = $conn->query($sql);
  
  $row=$result->fetch_assoc();
  
  $titleval=$row['title'];
  $contentval=$row['content'];
  $aval=$row['authorname'];
  $abio=$row['authorshortbio'];
  $photourl=$row['authorphoto'];


  
  
}

?>


<html>
   <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 
  
  <body>
    
    <script >
    function refreshrender()
      {
        
    var text = $('#htmlsource').val();
      var title=$('#titlebox').val();
        $('#titletext').html(title);
        $('#contenthtml').html(text);    
      
      
      
      
      }
      
      function savearticle()
      {
        //send sata to a
        tbox=$('#titlebox').val();
    authorname=$('#authorname').val();
    authorbio=$('#authorbio').val();
    photourl=$('#photourl').val();
    htmlsource=$('#htmlsource').val();
        
        $.post( "savearticle.php",{
          title:tbox,
          authorname:authorname,
          authorbio:authorbio,
          photourl:photourl,
          content:htmlsource,
          mode:"<?php echo $_GET['mode']; ?>",
          eid:<?php echo $_GET['eid']; ?>
          <?php 
          if($_GET['mode']=='edit'){
      echo ",aid:".$_GET['id'];
}
        ?>
  

        },function( data ) {
         // console.log(data);
        // alert(data);
    window.location.href = '/admin/editedition.php?id=<?php echo $_GET['eid']; ?>';
  });
      }
      
      
      
     
    
    
    </script>
    
    <h1>
       Add Article
    </h1>
    Title:<input type="text" id="titlebox" placeholder="Title" value="<?php echo $titleval;?>"></input><br>
  
   Author:<input type="text" id="authorname" placeholder="Author" value="<?php echo $aval;?>"></input><br>
  Author Bio:<input type="text" id="authorbio" placeholder="AuthorBio" value="<?php echo $abio;?>"></input><br>
Photo-Url:<input type="text" id="photourl" placeholder="paste author phhoto url " value="<?php echo $photourl;?>"></input><br>
    <div class="code">
    post content(HTML):
      <textarea id="htmlsource">
      <?php echo $contentval;?>
      
      
      </textarea><br>
      
      <input type="button" onclick="refreshrender();" value="preview"/>
     <input type="button" onclick="savearticle();" value="Save"/>
    
       
    </div>
  
  <div class="result">
    
    <div  id="titletext" class="title">
      
       </div>
    
    <div class="content" id="contenthtml">
      
    </div>
    
    
  </div>
    
    
    
    
    
    
    
<?php include 'footer.php';?>
    
  </body>
</html>



<?php



?>

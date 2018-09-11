<?php

$titleval="";
$contentval="";
$abio="";
$aval="";

$photourl="";
include 'header.php';
 
if(isset($_GET['id']))
{  include '../common/con.php';

            $id=$_GET['id'];
            $sql = "SELECT * from Articles where id=$id";

            $result = $conn->query($sql);

            $row=$result->fetch_assoc();

            $titleval=$row['title'];
            $contentval=$row['content'];
            $aval=$row['authorname'];
            $abio=$row['authorshortbio'];
            $photourl=$row['authorphoto'];
            $artdate=$row['date'];
}

?>



    <script >
    function refreshrender()
      {
           //send sata to a
        tbox=$('#titlebox').val();
        console.log(tbox);
    authorname=$('#authorname').val();
    authorbio=$('#authorbio').val();
    photourl=$('#photourl').val();
        date=$('#artdate').val();
var editor = ace.edit("editor");

 code = editor.getValue();  
       
        $.post( "/edition/testarticle.php",{
          title:tbox,
          authorname:authorname,
          authorbio:authorbio,
          authorphoto:photourl,
          content:code,
         artdate:date,
          mode:"edit",
          eid:-2,
          aid:-2
}
             ,function( data ) {
         console.log(data);
        // alert(data);
        $("#iframe1").contents().find('body').html(data); 
        });
      
      
      
      }
      
      function savearticle()
      {
        //send sata to a
        tbox=$('#titlebox').val();
    authorname=$('#authorname').val();
    authorbio=$('#authorbio').val();
    photourl=$('#photourl').val();
              date=$('#artdate').val();
        var editor = ace.edit("editor");

var code = editor.getValue();
        
        $.post( "savearticle.php",{
          title:tbox,
          authorname:authorname,
          authorbio:authorbio,
          authorphoto:photourl,
          content:code,
           artdate:date,
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
Date of article:<input type="date" value="<?php echo $artdate;?>" id="artdate" name="artdate"/>

<style type="text/css" media="screen">
    #editor { 
      width:800px;
      height:500px;
    }
</style>
<div id="editor" >  <?php echo htmlspecialchars($contentval);?> </div>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/html");
  //editor.setValue(' ")   ;
</script>
     <br>
      
      <input type="button" onclick="refreshrender();" value="preview"/>
     <input type="button" onclick="savearticle();" value="Save"/>
       <!-- frame -->
      
    </hr>
     <iframe id="iframe1" draggable="true" width="900" height="1500" style=""">
    
    </iframe>  
       
</div>
  
 

<?php include 'footer.php';?>
    
  </body>
</html>



<?php



?>

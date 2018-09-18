<?php

include "common/con.php";

//fetch latest edition and fill placeholders 
$sql="select * from edition where visible =1 order by year desc , month desc";
$edit=$conn->query($sql);  
///SELECT convert(datetime, CONCAT('10 ',CONCAT(CONCAT(name,' '),year), 106)
?>


<html>


	<head>
		<title>Threads</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
		<link href="/styles/style.css" rel="stylesheet">
 
																					 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
            



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
  <body >
    

 
<div class="z-depth-2" style="background : url('/webimages/topbar.png');background-repeat:round;">
  <div class="container ">
    <img style="padding :30px 14px" src="/webimages/threads-logo.png" class="responsive-img">
  </div>
  
    </div>

		<!--img id="threadslogo" src="/webimages/threads-logo.png"-->
 <!---
        <div class="row">
      <div class="col m8 s12 v-currentedition-box offset-m2">
      <div class="col m6 s12">
             <div class="center-align" style="font-size:800%; font-family: 'vogueregular';margin-bottom:-18%;">
							 AUG. </div><div class="center-align" style="font-size: 400%; font-family: 'vogueregular'; margin-left:20%;" >        
          2018
        </div>
        
 
           </div>
        <div class="col m6 s12">
          <div class="left" style="font-family:'webfontregular';">
             <h5>
               Read Online<br><br>Downlod PDF</h5>
							 <br><br><br><hr style="color:000000">
              <h4 style='font-weight:500;'> Previous Editions
          </h4></div>
        </div>
      </div>
    </div>
		-->
	<?php
		$ii=0;
		while($row=$edit->fetch_assoc())
		{
		
		?>
		
		       <div class="row <?php if($ii!=0){echo "hide";}?>">
      <div class="col m8 s12 v-currentedition-box offset-m2">
      <div class="col m6 s12">
             <div class="center-align" style="font-size:800%; font-family: 'vogueregular';margin-bottom:-18%;">
							 <?php echo $row["name"];  ?> </div><div class="center-align" style="font-size: 25pt;	font-family: 'vogueregular';	position: relative;	margin-top: 16px;	margin-left: -28.1%;" >        
          <?php echo $row["year"];  ?>
        </div>
        
 
           </div>
        <div class="col  offset-m1 m4 s12">
					<div style="width:100%;height:100%;margin-top:6%;">
						<div class="linkgroups">
							
								
								<a href="<?php echo "/edition/?id=".$row["id"];  ?>" >Read Online
							
								
	</a></div>
						
						  <?php
								
									if ($row["pdflink"]!="nil" or true ){ ?>		<div class="linkgroups">
						<a    href="<?php echo $row["pdflink"]; ?>">  Download PDF 
						
					 </a>  </div>
			
 
								 <?php
																							
																						 }
								 ?>
								 
							
						 
						
						<?php if($ii==0){ ?>
						<!--- only for first-->
					
							
					<div class="prev-link">
        		<a   href="/prev.php" >Previous Edition</a></div>
				
					<?php }  ?>
					
					</div>
           
					</div>
        </div>
      </div>
    </div>
		
		
		
		<?php
			$ii=$ii+1;
		}
			
			?>
<div class="newfooter" >
  <div class="row" style="padding-top:22px;">
   <div class="col s2 m1 l1 offset-l2 offset-m2 offset-s1" style='margin-left:14.1%;	padding-top: -1px;	padding: 1% 1% 1% 1%;'>
		<a href="/about.php"><img class="responsive-img" src="/webimages/About.png" /></a>
    </div>
<div class="col s2 m1 l1 offset-s2" style='padding: 1%;'>
     <a href="http://assoc.cse.nitc.ac.in/"><img class="responsive-img" src="/webimages/CSEA.png"></a>
     </div>
     <div class="col s2 m1 l1 offset-s2" style='padding: 1%;'>
			 <a href="http://minerva.nitc.ac.in/cse/"><img class="responsive-img" src="/webimages/CSED.png"></a>
     </div>
    
        <div class="col s4 m3 l4 offset-s1 offset-l3 offset-m2"  > 
        <img class="responsive-img" src="/webimages/logo.png" style="margin-left:13%;" >
    </div>
   
  </div>
    </div>
    <script>
		
		function loadprev()
			{
				
				$(".hide").removeClass().addClass("row");
			$('#prevbutton').hide();
				  $("body").animate({
          scrollTop:  300
     });
				
			}
		
		</script>
  </body>
</html>
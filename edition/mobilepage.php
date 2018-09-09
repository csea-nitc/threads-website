<?php

include '../common/con.php';
  
$id=$_GET['id'];
$sql="SELECT * FROM edition where visible=1 order by id desc";
$edit=$conn->query($sql);  


$sql="SELECT * FROM edition where id=$id";
$curedit=$conn->query($sql);
$cureditrow=$curedit->fetch_assoc();


?>

<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<nav  class="blue darken-3"> 
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  
  
  <!-- navbar content here  --> </nav>

  <ul id="slide-out" class="sidenav">
    <li><div class="user-view blue darken-3">
   <!--   <div class="background">
        <img src="images/office.jpg">
      </div> -->
      <a href="#user"><img class="circle" src="/webimages/CSED-logo.png"></a>
      <a href="#name"><span class="name">AUG 2018</span></a>
    
    </div></li>
 
    <li><a href="#!">Article Title 1 </a></li>
     <li><a href="#!">Article Title 2 big text good </a></li>
     <li><a href="#!">Article Title 3 </a></li>
     <li><a href="#!">Article Title 4 </a></li>
     <li><a href="#!">Article Title 5 </a></li>
    <li><div class="divider"></div></li>
 <!-- Dropdown Trigger -->
    <li>
  <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>EDITIONS</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    
    <?php
    
																while($w=$edit->fetch_assoc())
																{
                                  
                                  if($i==0)
                                  {
                                    $curname=substr($w["name"],0,3);
                                    $curyear=$w["year"];
                                    $i=1;
                                  }
                                  $curid=$w["id"];
                                  $cname=$w["name"];
                                  $cyear=$w["year"];
																			?>
                                                    
    <li onclick="initpage(<?php echo $curid; ?>,-1,true,this.getAttribute('edname'),this.getAttribute('eyear'));" edname="<?php echo  substr($cname,0,3);; ?>" eyear="<?php echo  $cyear; ?>"><a href="#!"><?php  echo $w["name"];	?></a></li>
    
  
        
												

																<?php



																}
																?>            
    
    ?>
   
    <li class="divider" tabindex="-1"></li>

  </ul>
    </li>
  </ul>
  
  
  
  
   
 
<div class="row">
 
    <div class="container">
    
    

	    <div class="col l10 m10 s10">
                <div class="row">
                    
                    <div class="col offset-s6 s4">
                        <div class="edyear">
                            
                        <span class="top-edition-text">AUG</span>
                                        <span class="top-edition-text">.</span>
                        <span class="top-edition-year-text">2018</span>
                
                        </div>
                        </div>
        </div>
        <div class="row">
            <div class="col">
                                    <div class="article-box" id="article-box">
                                        <div class="title-box" id="title-box">
                                        </div>
                                 <div class="authordetails" id="authordetails">
                                                    <div class="authorphoto" id="authorphoto">
                                                    </div>
                                                    <div class="authorname" id="authorname">Arjun Suresh
                                                    </div>
                                                    <div class="authorbio" id="authorbio">Something Something
                                                    </div>
                                        </div>
                                            
                                        <div class="content-box" id="content-box">
                                        </div>
                                        
            
        
        </div>
            </div>
                
                
                                    </div>
 
        </div>
    </div>
 
 
 
 
 
 
 
 
 
    </div>
    
 
  
  
  
  
  
  

<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
  
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
		<script>
  
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();
  
      
      	function loadarticle(id) {
        $('.dropdown-btn-selected').removeClass().addClass("dropdown-btn");
        $('[eid='+id+']').removeClass();
        $('[eid='+id+']').addClass("dropdown-btn-selected")
				/*
  
				<div class="article" id="article">
				  
				  <!--- to render article -->
				  
				  <div id="articletitle">
				    
				  </div>
				  
				  <div id="content">
				    
				  </div>
				   
				</div>
  
  
				*/
 
				$.get("/getarticle.php?id=" + id, function(data) {
  
					var article = JSON.parse(data);

					var i;

					$('#title-box').empty();
					
					$('#content-box').empty();
					$('#title-box').html(article.title);

					$('#viewcount').html(article.viewcount+" Views");
					$('#content-box').html(article.content);
					$('#authorbio').html(article.authorshortbio);
			
				$('#authorname').html(article.authorname);
				
					$('#authorphoto').html();
						var div = $("<img>", {
							"src":article.authorphoto
									});
					
				//	$('#authorbio').append(div);
				});
				$('#article-box').show();
				$('#articles').hide();
				
			
			}
			function loadarticlelist(id,loadfirstarticle) {
			 
        
      
        
        
        $('.dropdown-btn').remove();
         $('.dropdown-btn-selected').remove();
			
				$.get("../getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);
					
					var i;

					 
					for (i = 0; i < articles.length; i++) { 
						var title = $(document.createElement('div')).attr({eid:articles[i].id,onclick:"loadarticle("+articles[i].id+");"});
						if(loadfirstarticle&&i==0){
            title.addClass("dropdown-btn-selected");
              loadarticle(articles[i].id);
            }
              else{title.addClass("dropdown-btn");
            }
            
						title.html(articles[i].title);
						$('#article-nav').append(title);
		
					}

				});




			}
      
		 function selectarticle(idd)
			{
         
				 loadarticle(idd)
				
			}
		
			
			function initpage(editionid,articleid,loadfirstarticle,edname,edyear)
			{
      
        $('#top-edition-text').html(edname);
        $('#top-edition-year').html(edyear);
				
        loadarticlelist(editionid,loadfirstarticle);
        if(loadfirstarticle==false){
				          selectarticle(articleid);
				}
			}
			$( document ).ready(function() {
     
        //load firstg current edition
        initpage(10,11,false,"<?php echo $curname; ?>","<?php echo $curyear; ?>");
});
      
  </script>
</body>

</html>
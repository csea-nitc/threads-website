<?php


include '../common/con.php';
  
$id=$_GET['id'];
$sql="SELECT * FROM edition where visible=1";
$edit=$conn->query($sql);  


$sql="SELECT * FROM edition where id=$id";
$curedit=$conn->query($sql);
$cureditrow=$curedit->fetch_assoc();



  
?>

	<html>


	<head>
		<title>Threads</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
	<link href="/styles/post.css" rel="stylesheet"> 
        <link href="/styles/v-style.css" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	
		<body>
		<!-- <div class="header">-->
<div class="row threads-ribbon" style="background : url('/styles/topbar.png'); background-size:cover; ">
	<div class="col l12 m12 s12">
 
										<!--<img class="threads-ribbon" style="background-size:cover" src="/styles/topbar.png"/>--> 
			
		<img class="responsive-img threads-logo" src="/styles/threads-logo.png">
		</div>
	</div>
			

<div class="row">
	<div class="container">
	
		<div class="col s2 l2 m2">
									<div class="row">
									
										<div id="article-nav">
															
																<div class="editiontitle" id="editiontitle">ARTICLES </div>

										</div>

	

											</div>
									<div class="row">

									<div id="edition-nav">
								      
  <a class='dropdown-trigger btn editiontitle' href='#' data-target='dropdown1'>Editions</a>
                     
                     
  <ul id="dropdown1" class="dropdown-content">
																<?php 
																while($w=$edit->fetch_assoc())
																{
																			?>
    <li><a href="#!"><?php  echo $w["name"];	?></a></li>
										
  
        
												

																<?php



																}
																?>
    </ul>
									</div>

									</div>
		</div>

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
	

<div class="row" style="background : url('/webimages/bottombar.png'); background-size:cover; ">
  <div class="container" style="padding-top:1%;padding-bottom:3%; " >

      <div class="col l4 m6 s12 center">
        <img class="responsive-img col s4" src="/webimages/About.png" style="padding:1px;" >
        <img class="responsive-img col s4" src="/webimages/CSEA.png" style="padding:1px;">
        <img class="responsive-img col s4" src="/webimages/CSED.png" style="padding:1px;">
      </div>
      <div class="col l4 m6 s12 center" >
        <h4 style="font-family:'webfontregular'; font-weight:350; color: #FFFFFF; font-size:49.5px;">threads.</h4>
      </div>
		<div class="col l4 m6 s12 center">
		<div class="">
      <div class="col s6">
        <img class="responsive-img" src="/webimages/csea-logo.png">
      </div>
      <div class="col s6">
         <img class="responsive-img" src="/webimages/CSED-logo.png">
		</div>
			</div>
		</div>
	</div>
      <div class="col s12">
        <br>
        <hr>
      </div>
      <div class="col l12 m12 s12 center">
				<img class="responsive-img" src="/webimages/copyright.png">
        </div>
  </div>
  </div>
    

		<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    options={};
    var instances = M.Dropdown.init(elems, options);
  });
			/* 
     var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;
			
			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var dropdownContent = this.nextElementSibling;
			    var current = document.getElementsByClassName("selected");
			    if(current.length>0){
			    current[0].className = current[0].className.replace(" sidenav-selected", "");}
			    this.className += " sidenav-selected"; //<!--Dude, I copied and refined the code from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_active_element  but it is not working, can you check?-->
			    if (dropdownContent.style.display === "block") {
			      dropdownContent.style.display = "none";
			   
			    } else {
			      dropdownContent.style.display = "block";
			    
			    }
			  });
			}*/

			function loadarticle(id) {
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
			function loadarticlelist(id) {
			 
			
				$.get("../getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);
					
					var i;

					 
					for (i = 0; i < articles.length; i++) { 
						var title = $(document.createElement('button'),);
						title.addClass("dropdown-btn");
						
						title.html(articles[i].title);
						$('#article-nav').append(title);
		
					}

				});




			}
		 function selectarticle(idd)
			{
				 loadarticle(idd)
				
			}
			function selectedition(idd)
			{
				loadarticlelist(idd)
				
				
			}
			
			function initpage(editionid,articleid)
			{
				 selectedition(editionid);
				selectarticle(articleid)
				
				
				
			}
			$( document ).ready(function() {
 initpage(10,11);
});
      
		</script>
	</body>

	</html>
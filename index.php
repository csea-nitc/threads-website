<?php


include 'common/con.php';
  

$sql = "SELECT * from edition";
  
$result = $conn->query($sql);

  
?>

	<html>


	<head>
		<title>Threads</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
		<link href="styles/style.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>




	<body>
		<!-- <div class="header">-->

		<div class="header-title">
			<p><span class="logo"><img src="https://pbs.twimg.com/profile_images/3013467544/dd51e32901de9e4c92038ba278704514_400x400.png" alt="CSEA logo"></span>
				<b><span class="titletext">THREADS'18 </span> </b>
			</p>
		</div>
		<!--<div class="header-csea">
 (A CSEA INITIATIVE)
	 
	 </div>-->


		<!--</div>-->
		<div id="nav-bar" class="sidenav">
			<div class="editiontitle">EDITIONS</div>
			<?php
while($row=$result->fetch_assoc())
{
  
  ?>

				<button class="dropdown-btn" onclick="loadarticlelist(<?php echo $row["id"]; ?>);"><?php  echo $row['name']; ?>
  


  
  </button>

				<?php
  
}
$conn->close();
  
  ?>

		</div>


		<div class="articles" id="articles">

			<!--- to render article list -->


		</div>
		<div class="article-box" id="article-box">


			<div class="title-box" id="title-box">


			</div>
			<span class="viewcount" id="viewcount">
			
			
			</span>
			<div class="content-box" id="content-box">


			</div>

			<div class="authordetails" id="authordetails">



				<div class="authorphoto" id="authorphoto">

				</div>
				<div class="authorname" id="authorname">

				</div>
				<div class="authorbio" id="authorbio">

				</div>
				
			</div>
		</div>


		<div class="footer">




		</div>

		<script>
 
			var dropdown = document.getElementsByClassName("dropdown-btn");
			var i;
			/*
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

				sidenav = $('#nav-bar');
				sidenav.removeClass();
				sidenav.addClass('sidenav-selected');
				$.get("getarticle.php?id=" + id, function(data) {

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
					
					$('#authorbio').append(div);
				});
				$('#article-box').show();
				$('#articles').hide();
				
			
			}
			function loadarticlelist(id) {
				$('#article').empty();
				$('#articles').show();
				sidenav = $('#nav-bar');
				sidenav.removeClass();
				sidenav.addClass('sidenav-selected');
					$('#article-box').hide();
			
				$.get("getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);

					var i;

					$('#articles').empty();
					for (i = 0; i < articles.length; i++) {
						//apend to html
						var authorname = $(document.createElement('span'));
						var title = $(document.createElement('span'));
						authorname.addClass('author');
						title.addClass('title');
						title.html(articles[i].title);
						authorname.html(articles[i].authorname);
						var div = $("<div>", {
							"class": "entry",
							"onclick": "loadarticle(" + articles[i].id + ")"
						});
						div.append(title);
						div.append(authorname);
						$('#articles').append(div);
		
					}

				});




			}
		</script>
	</body>

	</html>
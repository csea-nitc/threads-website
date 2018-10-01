<?php
function isMobile() {
    
	
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}



if(isMobile() )


{
	include 'mobilepage.php';
	
}

else{

include '../common/con.php';
  
$id=$_GET['id'];
$sql="SELECT * FROM edition where visible=1 order by  year desc,month desc";
$edit=$conn->query($sql);  


$sql="SELECT * FROM edition where id=$id";
$curedit=$conn->query($sql);
$cureditrow=$curedit->fetch_assoc();

$curname=substr($cureditrow["name"],0,3);
                                    $curyear=$cureditrow["year"];

  
?>

	<html>


	<head profile="http://www.w3.org/2005/10/profile">

		<title>Threads</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="/styles/post.css" rel="stylesheet">
		<link href="/styles/v-style.css" rel="stylesheet">
	<link rel="icon"       type="image/png" href="/webimages/favicon.png" /> 
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126668797-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126668797-1');
</script>

	</head>

	<body>
		<!-- <div class="header">-->
		<div class="row threads-ribbon" style="background : url('/webimages/topbar.png'); background-size:cover; ">
			<div class="col l12 m12 s12">

				<!--<img class="threads-ribbon" style="background-size:cover" src="/styles/topbar.png"/>-->

				<a href="/"><img class="responsive-img threads-logo" src="/styles/threads-logo.png"></a>
			</div>
		</div>


		<div class="boxcon row">

			<div class="s11 offset-s1 col">

				<div class="col s3">


					<div class="edyear">

						<span class="top-edition-text" id="ednametxt"><?php echo $curname; ?>.</span>

						<span class="top-edition-year-text" id="edyeartxt"><?php echo $curyear; ?></span>

					</div>

					<div id="floatsidebar">
						<div class="row">
							<div class="col s12 l12 m12">
								<div id="article-nav" class="row">
									<div class="editiontitle" id="editiontitle">Articles </div>

									<div id="navbarentry-wrap">
										<div id="navbarwrapwrap">

										</div>
									</div>

								</div>



							</div>
						</div>
						<div class="row">
							<div class="col s12 m12 l12">


								<div id="edition-nav" class="row">


									<div class="editiontitle" id="editiontitle">Editions </div>
									<div id="navbarentry-wrap">





										<?php 
 
																while($w=$edit->fetch_assoc())
																{
                                  
                                
                                  $curid=$w["id"];
                                  $cname=$w["name"];
                                  $cyear=$w["year"];
																			?>



										<div class="navbaritem" id="editionentry" onclick="initpage(<?php echo $curid; ?>,-1,true,this.getAttribute('edname'),this.getAttribute('eyear'));" edname="<?php echo  substr($cname,0,3);; ?>" eyear="<?php echo  $cyear; ?>" edid="<?php echo  $w[" id
										 "]; ?>">
											<?php  echo $w["name"];	?>
										</div>





										<?php



																}
																?>

									</div>

								</div>
							</div>

						</div>
					</div>
				</div>


				<div class="col s8">

					<div class="row">
						<div class="col s12">
							<div class="article-box" id="article-box">
								<div class="title-box" id="title-box">
								</div>
								<div class="authordetails" id="authordetails">

									<div class="authornameandphoto">
										<img height="70" width="70" class="circle authorphoto responsive-img" id="authorphoto" src="" />
										<div class="authortext">

											<span class="authorname" id="authorname">
                                                    </span>




											<div class="authorbio" id="authorbio"> </div>
										</div>
										
										
										<div class="dateread">
											
											<span class="artdate" id="artdate">
												
											</span>
											<span class="readmin" id="readmin">
											
											</span>

																										 </div>
																											 
										</div>
									</div>

									<div class="content-box" id="content-box">
									</div>
									<div class="row" style="margin-top:39px;">

										<div class="dot">

										</div>
										<div class="dot">

										</div>
										<div class="dot ">

										</div>
									</div>



								</div>
							</div>


						</div>

					</div>
				</div>









			</div>


			<div class="row" style="	background: url('/webimages/BG.png');	height: 266px;	margin-bottom: 0px;	padding-top: 29px;	background-size: cover;	position: relative;">
				<div class="row" style="padding-top:1%;">

					<div class="col l3 offset-l1 m6 s12 center" style="margin-top:7px;" >
						<a href="/about.php"><img class="responsive-img col s4" src="/webimages/About.png" style="padding-top:7.1px;padding-right:23px;" ></a>
						<a href="http://assoc.cse.nitc.ac.in/">		<img class="responsive-img col s4" src="/webimages/CSEA.png" style="padding:8px;padding-right:22px"></a>
						<a href="http://minerva.nitc.ac.in/cse/"></a><img class="responsive-img col s4" src="/webimages/CSED.png" style="padding:8px;padding-right:22px"></a>
					</div>
					<div class="col l2 offset-l1 m6 s12 center">
					<!--	<span style="font-family:'webfontregular'; font-weight:350; font-size:58pt;color: #FFFFFF;vertical-align:center;">threads.</span>-->
						<img class="responsive-img" src="/webimages/threads.png" />
					</div>
					<div class="col l2 offset-l2 m6 s12 center">
						<div class="">
							<div class="col s12">
								<img class="responsive-img"  src="/webimages/logo.png">
							</div>

						</div>








					</div>




				</div>
				<div class="row s10 offset-s1 col copyrightgroup">
					<div class="col s12" style="	margin-bottom: 30px;	height: 1px;	background-color: white;	opacity: 0.6;">
						<hr style="margin-bottom:22px;	height: 1px;	background-color: white;	opacity: 0.6;">
					</div>
					<div class="col l12 m12 s12 center" style="margin-bottom:2px;">
						<img class="responsive-img" src="/webimages/copyright.png">
					</div>
				</div>
			</div>
		</div>


		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var elems = document.querySelectorAll('.dropdown-trigger');
				options = {};
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
				$('#articleentry.navbaritem-selected').removeClass().addClass("navbaritem");
				$('[eid=' + id + ']').removeClass();
				$('[eid=' + id + ']').addClass("navbaritem-selected")
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

					$('#viewcount').html(article.viewcount + " Views");
					$('#content-box').html(article.content);
					$('#authorbio').html(article.authorshortbio);
					if(article.authorname!==""){
						$('#readmin').show();
						$('#artdate').show();
					$('#readmin').html(article.minutes +" min read");
					$('#artdate').html(article.datetxt);
					}
					else{
						
				$('#readmin').hide();
						$('#artdate').hide();
						
					}
					$('#authorname').html(article.authorname);
					if (article.authorname != "") {
						jQuery("#authorphoto").attr("src", "");
						
						jQuery("#authorphoto").attr("src", article.authorphoto);
						
						$('#authorphoto').show();

					}
					else{
						$('#authorphoto').hide();
						
					}

				ga('set', 'page', '/article/'+article.title);
					ga('send', 'pageview');
					//	$('#authorbio').append(div);
				});
				$('#article-box').show();
				$('#articles').hide();


			}

			function loadarticlelist(id, loadfirstarticle) {
				//
				$('#editionentry.navbaritem-selected').removeClass().addClass("navbaritem");
				$('[edid=' + id + ']').removeClass();
				$('[edid=' + id + ']').addClass("navbaritem-selected");

				$('#navbarentry-wrap').html('');
				$.get("../getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);

					var i;
					var ind;
					for (i = 0; i < articles.length; i++) {
						var title = $(document.createElement('div')).attr({
							id: "articleentry",
							eid: articles[i].id,
							onclick: "loadarticle(" + articles[i].id + ");"
						});
						if (loadfirstarticle == false && i == 0) {
							title.addClass("navbaritem-selected");

						} else {
							title.addClass("navbaritem");
						}

						title.html(articles[i].title);
						$('#navbarentry-wrap').append(title);

					}
					if (loadfirstarticle) {
						loadarticle(articles[0].id);
					}
				});




			}

			function selectarticle(idd) {

				loadarticle(idd)

			}


			function initpage(editionid, articleid, loadfirstarticle, edname, edyear) {

				$('#ednametxt').html(edname);
				$('#edyeartxt').html(edyear);

				loadarticlelist(editionid, loadfirstarticle);
				if (loadfirstarticle == false) {
					selectarticle(articleid);
				}
			}

			$(document).ready(function() {

				/*	$(window).scroll(function(){
    $("#floatsidebar").css("margin-top",Math.max(-450,0-$(this).scrollTop()));
						 console.log($(document).height()-150+" :"+$(this).scrollTop());
			   if($(this).scrollTop()>($(document).height()-150))
						{
							$("#floatsidebar").hide();
					 }
					else{
						  $("#floatsidebar").show();
					}
});*/
				//load firstg current edition
				initpage(<?php echo $cureditrow['id']; ?>, -11, true, "<?php echo $curname; ?>", "<?php echo $curyear; ?>");
			});
		</script>
	</body>

	</html>
	<?php
}
	
	?>

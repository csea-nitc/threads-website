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

	<head profile="http://www.w3.org/2005/10/profile" >
<title>Threads</title>

		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="theme-color" content="#305b87">
    		<link rel="icon"       type="image/png" href="/webimages/favicon.png" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		

		<link href="/styles/post.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126668797-1"></script>
<script>
 /* window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126668797-1');
  
  */
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)
    [0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-126668797-1', 'auto') ; 

    ga('send', 'pageview');
</script>


	</head>

	<body>
	 
		<nav class="topnavbar" style="background : url('/webimages/topbar.png'); background-size:cover;position:fixed;">
			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

			<a href="/"><img class="responsive-img threads-logo-mobile" src="/styles/threads-logo.png"></a>

			<!-- navbar content here  -->
		</nav>

		<ul id="slide-out" class="sidenav">
			<li>
				<div class="user-view" style="padding: 0px;	margin-bottom: 16px;">
					<!--   <div class="background">
        <img src="images/office.jpg">
      </div> -->

			
					<div class="editiontitle" id="editiontitle" style="background-color:#305b87;color:white;">Articles </div>

				</div>
			</li>




			<li id="artli">
				<div class="divider"></div>
			</li>
			<!-- Dropdown Trigger -->
			<li style="position:relative;bottom:0px">
				<a class='dropdown-trigger btn ' style="background-color:#305b87;color:white" href='#' data-target='dropdown1'>EDITIONS</a>

				<!-- Dropdown Structure -->
				<ul id='dropdown1' class='blue dropdown-content'>

					<?php
    
		$i=0;
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

						<li onclick="initpage(<?php echo $curid; ?>,-1,true,this.getAttribute('edname'),this.getAttribute('eyear'));" edname="<?php echo  substr($cname,0,3);?>" eyear="<?php echo  $cyear; ?>">
							<a href="#!">
								<?php  echo $w["name"]." ".$w["year"];	?>
							</a>
						</li>





						<?php


																}
																?>


						<li class="divider" tabindex="-1"></li>


				</ul>
			</li>
		</ul>



<div id="loadscreen">

	<div class="loader">
		
	</div>
	
		</div>


		<div class="row">


			<div class="col s12">

				<div class="row">
					<div class="col">
						<div class="article-box" id="article-box" style="margin-top:75px;">
							<div class="title-box" id="title-box">
							</div>
							<div class="authordetails" id="authordetails">


								<div class="authornameandphoto" style="/* float: right; */	width: 100%;letter-spacing: -1px;	padding-left: 1%;	margin-top: 13px;">
									<img height="70" width="70" class="circle authorphoto responsive-img" id="authorphoto" style="margin-left: 0px;margin-right: 3%;loat: right;height: 80px;width: 70px;" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
									<div class="authortext" style="	float: left;	margin-right: 0px;	padding-top: 11px;	width: 75%;	max-width: 75%;">

										<span class="authorname" id="authorname">
                                                    </span>




										<div class="authorbio" id="authorbio"> </div>
									</div>




								</div>
							</div>
							<div class="row dateread">

								<span class="col s3 artdate" id="artdate">
												
											</span>
								<span class="col s4 readmin" id="readmin">
											
											</span>

							</div>

							<div class="content-box" id="content-box" style="padding-top:0px;">
							</div>
							<div class="row" id="dotgroup" style="margin-top:39px;">

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




  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      
			  <span>
      <label>
        <span class="col s3" style="padding-top:10px;font-size:1.1em;" ><b>Email:</b></span>
        <input class="col s9" type="email" id="alertemail" required="true" placeholder="Enter your email"></input>
      
      </label>
    </span>
 
  <p class="offset-s1 col s11">
      <label>
        <input id="alertarticle"   name="alert" type="radio"  />
        <span>Alert me on every update</span>
      </label>
    </p>
      <p class=" offset-s1 col s11">
      <label>
        <input id ="alertedition" name="alert" type="radio"  />
        <span>Alert me only on new edition</span>
      </label>
    </p>
    <br>
  </div>
   
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect blue lighten-2 waves-green btn-flat" onclick="subscribe();" >Subscribe!</a>
    </div>
  </div>






		<div class="row" id="bottombar" style="	background: url('/webimages/BG.png');	height: 281px;	margin-bottom: 0px;	padding-top: 13px;	background-size: cover;	position: absolute;	margin-bottom: 0px;">
			
			<div class="row">
			<div data-target="modal1"  class="col s4 modal-trigger offset-s4 " >	<img src="/webimages/Subscribe.png" class="responsive-img center" />
		</div>
			</div>
			<div class="row" style="margin-bottom:0px;">
				
				<div class="col   s11 offset-s1 center" style="margin-top:24px;">
					<a href="/about.php"><img class="responsive-img col s3" src="/webimages/About.png" style="padding-top:7.1px;padding-right:23px;" ></a>
					<a href="http://assoc.cse.nitc.ac.in/">		<img class="responsive-img col s3 offset-s1" src="/webimages/CSEA.png" style="padding:8px;padding-right:22px"></a>
					<a href="http://minerva.nitc.ac.in/cse/"></a><img class="responsive-img col  s3 offset-s1" src="/webimages/CSED.png" style="padding:8px;padding-right:22px"></a>
				</div>
				<div class="col l2 offset-s3 s6 center">
					<!--	<span style="font-family:'webfontregular'; font-weight:350; font-size:58pt;color: #FFFFFF;vertical-align:center;">threads.</span>-->
					<img class="responsive-img" src="/webimages/threads.png" style="margin-top:8px;" />
				</div>
				<div class="col l2 offset-s3 s6  center" style="margin-top:2px;">
					<div class="">
						<div class="col s12">
							<img class="responsive-img" src="/webimages/logo.png">
						</div>

					</div>








				</div>




			</div>
			<div class="row s10 offset-s1 col" style="margin-bottom:0px;">
				<div class="col s12" style="	height: 1px;	background-color: white;	opacity: 0.6;">
					<hr style="margin-bottom:22px;	height: 1px;	background-color: white;	opacity: 0.6;">
				</div>
				<div class="col l12 m12 s12 center" style="margin-top:4px;">
					<img class="responsive-img" src="/webimages/copyright.png">
				</div>
			</div>
		</div>
		</div>
<script src="/js/post-mobile.js"></script>

		<script>
		
		document.addEventListener('DOMContentLoaded', function() {
		 
				var elems = document.querySelectorAll('.dropdown-trigger');
				options = {};
				var instances = M.Dropdown.init(elems, options);
				options={inDuration:100}
				 var elems = document.querySelectorAll('.modal');
				    var instances = M.Modal.init(elems, options);
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
			    this.classNameins how to implement event tracking with analytics.js. += " sidenav-selected"; //<!--Dude, I copied and refined the code from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_active_element  but it is not working, can you check?-->
			    if (dropdownContent.style.display === "block") {
			      dropdownContent.style.display = "none";
			   
			    } else {
			      dropdownContent.style.display = "block";
			    
			    }
			  });
			}*/
	
			$(document).ready(function() {
						$('#dotgroup').hide();
					$('#bottombar').hide();
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
				$('.sidenav').sidenav({
					outDuration: 150,
					inDuration: 150
				});
window["edfullname"]="<?php echo $curname; ?>"+" "+"<?php echo $curyear; ?>";


// If article id is , loads it else load first article
// https://stackoverflow.com/questions/979975/how-to-get-the-value-from-the-get-parameters
var url = new URL(window.location.href);
var artid = url.searchParams.get("aid");


if(artid==null){
				initpage(<?php echo $cureditrow['id']; ?>, -11, true, "<?php echo $curname; ?>", "<?php echo $curyear; ?>");
			
			
			}
			else{
initpage(<?php echo $cureditrow['id']; ?>, artid, false, "<?php echo $curname; ?>", "<?php echo $curyear; ?>");
			
			}
			
			
			});
		</script>
	</body>

	</html>

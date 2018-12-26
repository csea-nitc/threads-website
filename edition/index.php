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
		  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="/styles/post.css" rel="stylesheet">
		<link href="/styles/v-style.css" rel="stylesheet">
	<link rel="icon"       type="image/png" href="/webimages/favicon.png" /> 
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		

	</head>

	<body>
		<!-- <div class="header">-->
		<div class="row threads-ribbon" style="background : url('/webimages/topbar.png'); background-size:cover; ">
			<div class="col s7">

				<!--<img class="threads-ribbon" style="background-size:cover" src="/styles/topbar.png"/>-->

				<a href="/"><img class="responsive-img threads-logo" src="/styles/threads-logo.png"></a>
			</div>
			<div class="col row offset-s2 s3" id="dropcontain">
			  <div id="dropdown2" class="row  dropdown-content" style="overflow:hidden;max-width:23%; " >
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
     <p class="col s6 offset-s2" style="margin-top:18px;margin-bottom:18px;">
      <label>
      
 <a class="btn blue lighten-2 "  onclick="subscribe();" >Subscribe!</a>
   </label>
    </p>
  </div>
  <a class="btn dropdown-trigger blue lighten-2" href="#!" style="margin-top:20px;" data-target="dropdown2">Subscribe!<i class="material-icons right">add</i></a>
            
			</div>
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



										<div class="navbaritem" id="editionentry" onclick="initpage(<?php echo $curid; ?>,-1,true,this.getAttribute('edname'),this.getAttribute('eyear'));" edname="<?php echo  substr($cname,0,3);; ?>" eyear="<?php echo  $cyear; ?>" edid="<?php echo  $w["id"]; ?>">
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


		<script>//loading script at end
		</script>
				
<script src="/js/post.js"></script>
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126668797-1"></script>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)
    [0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-126668797-1', 'auto') ; 
ga('send', 'pageview');
</script>

<script>
$(document).ready(function() {


			
			 var elems = document.querySelectorAll('.dropdown-trigger');
			
    var instances = M.Dropdown.init(elems, {closeOnClick:false,constrainWidth:false});
 window["subscribedrop"]=instances[0];
				options={inDuration:100}
				 var elems = document.querySelectorAll('.modal');
				    var instances = M.Modal.init(elems, options);
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


// If article id is , loads it else load first article
// https://stackoverflow.com/questions/979975/how-to-get-the-value-from-the-get-parameters
var url = new URL(window.location.href);
var artid = url.searchParams.get("aid");

 
 

if(artid==null){
				//load firstg current edition
				initpage(<?php echo $cureditrow['id']; ?>, -11, true, "<?php echo $curname; ?>", "<?php echo $curyear; ?>");
}
else{
                    //load aid art

				initpage(<?php echo $cureditrow['id']; ?>,artid, false, "<?php echo $curname; ?>", "<?php echo $curyear; ?>");

}
});

</script>
		
		
		
	</body>

	</html>
	<?php
}
	
	?>

<?php

include "common/con.php";

//fetch latest edition and fill placeholders
$sql="select * from edition where visible =1 order by year desc , month desc limit 1 ";
$sqlcount="select count(*) as count from edition where visible =1 ";
$hasprevlink=0;
$countstmt=$conn->query($sqlcount);
$rr=$countstmt->fetch_assoc();
if($rr['count']>1)
{$hasprevlink=1;}
$edit=$conn->query($sql);
$row=$edit->fetch_assoc();

///SELECT convert(datetime, CONCAT('10 ',CONCAT(CONCAT(name,' '),year), 106)


function isMobile() {
    
	
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

// to displaythreads
$mobile=0;
if(isMobile()){$mobile=1;}


?>
<html>
	<head profile="http://www.w3.org/2005/10/profile" >
		<title>Threads</title>
		<link rel="icon"       type="image/png" href="/webimages/favicon.png" />
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
			<meta content="utf-8" http-equiv="encoding">
				<meta name="viewport" content="widt	h=device-width, initial-scale=1.0">
					<meta name="theme-color" content="#305b87">
						<link href="/styles/style.css" rel="stylesheet">
							<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
								<!-- Compiled and minified CSS -->
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
									<!-- Compiled and minified JavaScript -->
									<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
									<!-- Global site tag (gtag.js) - Google Analytics 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
 
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

function trackpdf()
{

ga('set', 'page', 'downloadlinkevent/'+"<?php echo $row['name'].$row['year'];;  ?>");
ga('send', 'pageview');
return true;
}

	document.addEventListener('DOMContentLoaded', function() {
		 
				var elems = document.querySelectorAll('.dropdown-trigger');
				options = {};
				var instances = M.Dropdown.init(elems, options);
				options={inDuration:100}
				 var elems = document.querySelectorAll('.modal');
				    var instances = M.Modal.init(elems, options);
			});
$(document).ready(function() {


			
			 var elems = document.querySelectorAll('.dropdown-trigger');
			
    var instances = M.Dropdown.init(elems, {closeOnClick:false,constrainWidth:false});
 window["subscribedrop"]=instances[0];
 });
 
 
 function isvalidemail(email) {


 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
 
    return (false)
}
	
function subscribe()
			{
			
			var email=$('#alertemail').val();
			if(email=='')
			{alert('Please fill email field');return;}
			if (isvalidemail(email)==false)
			{alert('Please enter valid email id');return;}
			var alertart=$("#alertarticle").is(':checked');
			var alerted=$("#alertedition").is(':checked');
			if(!alertart && !alerted){alert("Please select an alert checkbox");return;}
			a1=0;a2=0;
			if(alertart){a1=0;}
			if(alerted){a1=1;}
			// send to server
			
			$.get("/subscribetoemail.php?id=" + email+"&alerttype="+a1, function(data) {


			});
			window.subscribedrop.close();
			 M.toast({html: 'Thanks for subscribing'})
			
			
			}
</script>
								</head>
								<body >
									<div class="z-depth-2" style="background : url('/webimages/topbar.png');background-repeat:round;">
										<div class="container row ">
										<div class="col s8">
											<img style="padding :30px 14px;" src="/webimages/threads-logo.png" class="responsive-img">
											</div>
											
											
											<div class="col s4">
											<?php if($mobile==0){ ?>
														<div class="col row offset-s3" id="dropcontain">
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
 <?php } ?>
  </div>
											
	  </div>										</div>
										</div>
										<!--img id="threadslogo" src="/webimages/threads-logo.png"-->
										<!---
        <div class="row"><div class="col m8 s12 v-currentedition-box offset-m2"><div class="col m6 s12"><div class="center-align" style="font-size:800%; font-family: 'vogueregular';margin-bottom:-18%;">
							 AUG. </div><div class="center-align" style="font-size: 400%; font-family: 'vogueregular'; margin-left:20%;" >
          2018
        </div></div><div class="col m6 s12"><div class="left" style="font-family:'webfontregular';"><h5>
               Read Online<br><br>Downlod PDF</h5><br><br><br><hr style="color:000000"><h4 style='font-weight:500;'> Previous Editions
          </h4></div></div></div></div>
		-->
										<?php

		

		?>
										<div style="overflow-y:scroll; max-height:55%;">
											<div class="row">
												<div class="col s10 offset-s1 l8 offset-l2 v-currentedition-box ">
													<div class="col  offset-l2 l4 s12 m12 "			>
														<span style="	font-size: 10em;	font-family: vogueregular;" id="ednametxt">
															<?php echo $row["name"];  ?>
														</span>
														<span style="	font-size: 236%;	display: block;	margin-top: -71px;	margin-left: 3%;	font-family: vogueregular;	position: relative;	/* position: initial; */	/* top: 0px; */" id="edyeartxt">
															<?php echo $row["year"];  ?>
														</span>
													</div>
													<div class="col s12 m12  offset-l1  l5" style="margin-bottom:13px;padding: 3px;">
														
<div class="linkcontainer"> 												<div class="linkgroups">
																<a href="
																	<?php echo "/edition/?id=".$row["id"];  ?>" >Read Online


	
																</a>
															</div>
															<?php

									if ($row["pdflink"]!="nil"  ){ ?>
															<div class="linkgroups">
																<a  onclick="return trackpdf();"  target="_blank" href="
																	<?php echo $row["pdflink"]; ?>">  Download PDF

					 
																</a>
															</div>
															<?php

																											}

						?>
															<!--- only for first-->
<?php if($hasprevlink) {?>													<div class="linkgroups" >
																<a   href="/prev.php" >Previous Edition</a>
															</div>
															<?php } ?>
															
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

									<div class="newfooter" >
									<?php if($mobile==1){ ?>
									<div class="row" style="margin-top:12px;margin-left:10%">
									<div data-target="modal1"  class="col s4 modal-trigger offset-s4 " >	<img src="/webimages/Subscribe.png" class="responsive-img center" /></div>
		</div>
		<?php } ?>
									
										<div class="row" style="<?php if($mobile==0){ ?> padding-top:22px; <?php } ?>">
											<div class="col s2 m1 l1 offset-l2 offset-m2 offset-s1" style='margin-left:14.1%;	padding-top: -1px;	padding: 1% 1% 1% 1%;'>
												<a href="/about.php">
													<img class="responsive-img" src="/webimages/About.png" />
												</a>
											</div>
											<div class="col s2 m1 l1 offset-s2" style='padding: 1%;'>
												<a href="http://assoc.cse.nitc.ac.in/">
													<img class="responsive-img" src="/webimages/CSEA.png">
													</a>
												</div>
												<div class="col s2 m1 l1 offset-s2" style='padding: 1%;'>
													<a href="http://minerva.nitc.ac.in/cse/">
														<img class="responsive-img" src="/webimages/CSED.png">
														</a>
													</div>
													<div class="col s5 m3 l4  offset-l3 offset-m2"  >
														<img class="show-on-large hide-on-med-and-down responsive-img" src="/webimages/logo.png" style="margin-left:13%;" >
															<img class="hide-on-large-only show-on-medium-and-down responsive-img" src="/webimages/logo.png" style="margin-left:13%;margin-top:6%;" >
															</div>
														</div>
													</div>
												</body>
											</html>

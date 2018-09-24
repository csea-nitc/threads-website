 <?php
$va=$_POST;
  
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
		<link rel="icon" href="/webimages/favicon.png?v=1.1"> 
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

				<a href="/"><img class="responsive-img threads-logo" src="/styles/threads-logo.png"></a>
			</div>
		</div>


		<div class="boxcon row">

			<div class="s11 offset-s1 col">

				<div class="col s3">


					<div class="edyear">

						<span class="top-edition-text" id="ednametxt">JAN</span>

						<span class="top-edition-year-text" id="edyeartxt">2018</span>

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
										<img height="70" width="70" class="circle authorphoto responsive-img" id="authorphoto" src="<?php echo $va["authorphoto"]; ?>" />
										<div class="authortext">

											<span class="authorname" id="authorname"><?php echo $va["authorname"]; ?>
                                                    </span>




											<div class="authorbio" id="authorbio"> <?php echo $va["authorbio"]; ?></div>
										</div>
										<div class="dateread">
											
											<span class="artdate" id="artdate">
												dummy 
											</span>
											<span class="readmin" id="readmin">
										dummy	</span>

																										 </div>
																											 
										</div>
									</div>

									<div class="content-box" id="content-box"><?php echo $va["content"]; ?>
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
						<a href="/"><img class="responsive-img col s4" src="/webimages/About.png" style="padding-top:7.1px;padding-right:23px;" ></a>
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


</body>
</html>
			
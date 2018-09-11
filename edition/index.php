<?php
function isMobile() {
    
	
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}



if(isMobile()  && false)


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
 
    <div class="s10 offset-s1 col">
    
        <div class="col s2 l2 m2">
					<div id="floatsidebar">
                                    <div class="row">
                                    <div class="col s12 l12 m12">
                                        <div id="article-nav" class="row">
                                                               <div class="editiontitle" id="editiontitle">Articles </div>
 
                                      <div id="navbarentry-wrap">
																				
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
                                  

		
    <div class="navbaritem" id="editionentry" onclick="initpage(<?php echo $curid; ?>,-1,true,this.getAttribute('edname'),this.getAttribute('eyear'));" 
				 edname="<?php echo  substr($cname,0,3);; ?>" eyear="<?php echo  $cyear; ?>" edid="<?php echo  $w["id"]; ?>"><?php  echo $w["name"];	?></div>
    
  
        
												

																<?php



																}
																?>
 
									</div>

					</div>
																			</div>
																			
						</div>
					</div>
									</div>
					

	    <div class="col l10 m10 s10">
                <div class="row">
                    
                    <div class="col offset-s9 s3">
                        <div class="edyear">
                            
                        <span class="top-edition-text" id="ednametxt"><?php echo $curname; ?></span>
                                        <span class="top-edition-text">.</span>
                        <span class="top-edition-year-text" id="edyeartxt"><?php echo $curyear; ?></span>
                
                        </div>
                        </div>
        </div>
        <div class="row">
            <div class="col">
                                    <div class="article-box" id="article-box">
                                        <div class="title-box" id="title-box">
                                        </div>
                                 <div class="authordetails" id="authordetails">
                                                   <div class="authornameandphoto">
																										 <img height="80" width="80" class="circle authorphoto responsive-img" id="authorphoto" src=""/>
																										 <div class="authortext">
																											 
																										 
                                                    <span class="authorname" id="authorname">
                                                    </span>
																	 											
																											
																	
																										 
																											 <div class="authorbio" id="authorbio"> </div>
																											 </div>
																											 
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
    
 
<div class="row" style="background : url('/webimages/bottombar.png');margin-bottom:0px;padding-top:29px;background-size:cover; ">
  <div class="container" style="padding-top:1%;padding-bottom:3%;z-index:8;" >
 
      <div class="col l4 m6 s12 center">
        <img class="responsive-img col s4" src="/webimages/About.png" style="padding:8px;padding-right:14px" >
		<a href="http://assoc.cse.nitc.ac.in/">		<img class="responsive-img col s4" src="/webimages/CSEA.png" style="padding:8px;padding-right:22px"></a>
        <a href="http://minerva.nitc.ac.in/cse/"></a><img class="responsive-img col s4" src="/webimages/CSED.png" style="padding:8px;padding-right:22px"></a>
      </div>
      <div class="col l4 m6 s12 center" >
        <span style="font-family:'webfontregular'; font-weight:350; color: #FFFFFF; font-size:40px;vertical-align:center;">threads.</span>
      </div>
        <div class="col l4 m6 s12 center">
        <div class="">
      <div class="col s12">
        <img class="responsive-img" src="/webimages/logo.png">
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
        $('#articleentry.navbaritem-selected').removeClass().addClass("navbaritem");
        $('[eid='+id+']').removeClass();
        $('[eid='+id+']').addClass("navbaritem-selected")
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
					if(article.authorname!="nil"){
					jQuery("#authorphoto").attr("src", article.authorphoto) 
					}
				//	$('#authorbio').append(div);
				});
				$('#article-box').show();
				$('#articles').hide();
				
			
			}
			function loadarticlelist(id,loadfirstarticle) {
			 //
				$('#editionentry.navbaritem-selected').removeClass().addClass("navbaritem");
				$('[edid='+id+']').removeClass();
				$('[edid='+id+']').addClass("navbaritem-selected");
				
				$('#navbarentry-wrap').html('');
				$.get("../getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);
					
					var i;
					 var ind;
					for (i = 0; i < articles.length; i++) { 
						var title = $(document.createElement('div')).attr({id:"articleentry",eid:articles[i].id,onclick:"loadarticle("+articles[i].id+");"});
						if(loadfirstarticle==false&&i==0){
            title.addClass("navbaritem-selected");

            }
              else{title.addClass("navbaritem");
            }
            
						title.html(articles[i].title);
						$('#navbarentry-wrap').append(title);
		
					}
							if(loadfirstarticle){				
						loadarticle(articles[0].id);
							}
				});




			}
      
		 function selectarticle(idd)
			{
         
				 loadarticle(idd)
				
			}
		
			
			function initpage(editionid,articleid,loadfirstarticle,edname,edyear)
			{
      
        $('#ednametxt').html(edname);
        $('#edyeartxt').html(edyear);
				
        loadarticlelist(editionid,loadfirstarticle);
        if(loadfirstarticle==false){
				          selectarticle(articleid);
				}
			}
			
			$( document ).ready(function() {
     
				$(window).scroll(function(){
    $("#floatsidebar").css("margin-top",Math.max(-200,0-$(this).scrollTop()));
						 console.log($(document).height()-150+" :"+$(this).scrollTop());
			   if($(this).scrollTop()>($(document).height()-150))
						{
							$("#floatsidebar").hide();
					 }
					else{
						  $("#floatsidebar").show();
					}
});
        //load firstg current edition
        initpage(<?php echo $cureditrow['id']; ?>,-11,true,"<?php echo $curname; ?>","<?php echo $curyear; ?>");
});
       
		</script>
	</body>

	</html>
<?php
}
	
	?>
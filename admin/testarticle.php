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
  
$id=-2;
$sql="SELECT * FROM edition where visible=1 order by  year desc,month desc";
$edit=$conn->query($sql);  


$sql="SELECT * FROM edition where id=-2";
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
                                  

		
    <div class="navbaritem" onclick="initpage(<?php echo $curid; ?>,-1,true,this.getAttribute('edname'),this.getAttribute('eyear'));" edname="<?php echo  substr($cname,0,3);; ?>" eyear="<?php echo  $cyear; ?>"><?php  echo $w["name"];	?></div>
    
  
        
												

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
                                                   <div class="authornameandphoto">
                                                    <span class="authorname" id="authorname">Arjun Suresh
                                                    </span>
																	 											
																											<img height="50" width="50" class="circle authorphoto responsive-img" id="authorphoto" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqIgbcCpiwO-V04gZWfGRZl-qrmIbgKXZtHCDjhV9nF_l3tD0g9w"/>
																	
																										 
																										 <div class="authorbio" id="authorbio">Something Something
                                                    </div> </div>
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
        <img class="responsive-img col s4" src="/webimages/About.png" style="padding:1px;" >
		<a href="http://assoc.cse.nitc.ac.in/">		<img class="responsive-img col s4" src="/webimages/CSEA.png" style="padding:1px;"></a>
        <a href="http://minerva.nitc.ac.in/cse/"></a><img class="responsive-img col s4" src="/webimages/CSED.png" style="padding:1px;"></a>
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
        $('.navbaritem-selected').removeClass().addClass("navbaritem");
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
			 
        
      
        
        $('#navbarentry-wrap').html('');
				$.get("../getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);
					
					var i;
					 var ind;
					for (i = 0; i < articles.length; i++) { 
						var title = $(document.createElement('div')).attr({eid:articles[i].id,onclick:"loadarticle("+articles[i].id+");"});
						if(loadfirstarticle&&i==0){
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
      
        $('#top-edition-text').html(edname);
        $('#top-edition-year').html(edyear);
				
        loadarticlelist(editionid,loadfirstarticle);
        if(loadfirstarticle==false){
				          selectarticle(articleid);
				}
			}
			$( document ).ready(function() {
     
        //load firstg current edition
        initpage(-2,-2,false,"<?php echo $curname; ?>","<?php echo $curyear; ?>");
});
      
		</script>
	</body>

	</html>
<?php
}
	
	?>
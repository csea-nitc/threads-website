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

			
		//function to add parameter to url 	
	function updateURLParameter(url, param, paramVal){
    var newAdditionalURL = "";
   url1=url.split("#")[0];
   //alert(url1[1]);
    var tempArray = url1.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (var i=0; i<tempArray.length; i++){
            if(tempArray[i].split('=')[0] != param){
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + param + "=" + paramVal;
    return baseURL + "?" + newAdditionalURL + rows_txt;
}
		
function isvalidemail(email) {


 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
 
    return (false)
}
			function loadarticle(id) {
				$('.sidenav').sidenav('close');
				$('#articleentry.navbaritem-selected').removeClass().addClass("navbaritem");

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

					
					
					$('#content-box').html(article.content);
						$('#loadscreen').remove();
						$('#bottombar').show();
					$('#authorbio').html(article.authorshortbio);
					if (article.authorname !== "") {
						$('#readmin').show();
						$('#artdate').show();
						$('#authordetails').show();
						$('#readmin').html(article.minutes + " min read");
						$('#artdate').html(article.datetxt);
					} else {
						$('#authordetails').hide();
						$('#readmin').hide();
						$('#readmin').hide();

					}
					$('#authorname').html(article.authorname);
					if (article.authorname !== "") {
						jQuery("#authorphoto").attr("src", "");
						jQuery("#authorphoto").attr("src", article.authorphoto);
					} else {
						$('#authorphoto').attr("src", "");
					}
					$('#dotgroup').show();
					window.scrollTo(0, 0);
					ga('set', 'page',window.edfullname+'/'+article.title);
					ga('send', 'pageview');
					
				 
 
					 
					//	$('#authorbio').append(div);
				});
				$('#article-box').show();
				$('#articles').hide();
				//alert(updateURLParameter(window.location.href, "aid", ""+id));
				window.history.replaceState('', '', updateURLParameter(window.location.href, "aid", ""+id));


			}

			function loadarticlelist(id, loadfirstarticle) {
				//
				//$('#editionentry.navbaritem-selected').removeClass().addClass("navbaritem");
				//$('[edid=' + id + ']').removeClass();
				$('[edid=' + id + ']').addClass("navbaritem-selected");

				$('[type=article]').remove();
				$.get("../getarticlelist.php?id=" + id, function(data) {

					var articles = JSON.parse(data);

					var i;
					var ind;
					for (i = 0; i < articles.length; i++) {
						var title = $(document.createElement('a')).attr({
							id: "articleentry",
							href: "#!",
							class: "truncate",
							eid: articles[i].id,
							onclick: "loadarticle(" + articles[i].id + ");"
						});
						if (loadfirstarticle == false && i == 0) {
							title.addClass("navbaritem-selected");

						} else {
							title.addClass("navbaritem");
						}

						title.html(articles[i].title);
						var li = $(document.createElement('li')).attr({
							type: "article"
						});
						li.append(title);
						li.insertBefore('#artli');

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

				$('#edname').html(edname + " " + edyear);
				//$('#edyeartxt').html(edyear);

				loadarticlelist(editionid, loadfirstarticle);
				if (loadfirstarticle == false) {
					selectarticle(articleid);
				}
			}


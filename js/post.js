		
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
console.log(id);
				$('[eid=' + id + ']').addClass("navbaritem-selected")
				 
               

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

				 ga('set', 'page',window.edfullname+'/'+article.title);
					ga('send', 'pageview');
					//	$('#authorbio').append(div);
				});
				window.history.replaceState('', '', updateURLParameter(window.location.href, "aid", ""+id));
				$('#article-box').show();
				$('#articles').hide();


			}
			
		
function updateURLParameter(url, param, paramVal){
    var newAdditionalURL = "";
    var tempArray = url.split("?");
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

			function loadarticlelist(id,aid) {
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
						
							title.addClass("navbaritem");
						

						title.html(articles[i].title);
						$('#navbarentry-wrap').append(title);

					}

	        
				if(aid==-1){loadarticle(articles[0].id);}
                else{	 	loadarticle(aid);}
			}
		
				);




			}

		 


			function initpage(editionid, articleid, loadfirstarticle, edname, edyear) {
 
				$('#ednametxt').html(edname);
				$('#edyeartxt').html(edyear);
                if (loadfirstarticle == true) {
						articleid=-1;
					}

				loadarticlelist(editionid, articleid);
	


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

			
			
			
function isvalidemail(email) {


 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
 
    return (false)
}
		

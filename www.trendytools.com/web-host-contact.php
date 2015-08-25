
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>cPanel Website Builder Addons – Contact Us.</title>
<meta name="keywords" content="trendy tools,website builders,website builder(s) for cPanel Control Panel,cPanel Hosts, HTML5 Site Builder"/>
<meta property="og:title" content="Trendy Tools, Website Builders for cPanel Hosts" />
<meta property="og:type" content="Trendy Tools for cPanel Hosts" />
<meta property="og:url" content="http://www.trendytools.com/"/>
<meta property="og:site_name" content="Trendy Tools, Website Builder(s)" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="trtools-themes/trtools_styles.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="trtools-themes/menu/jquery.mmenu.css" />
<link  href="trtools-themes/ttools_mobile_styles.css" rel="stylesheet" media="screen and (min-width: 300px) and (max-width: 1024px)" type="text/css" />
<script type="text/javascript" src="trtools-scripts/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="ttoolscripts/jquery.min.js"></script>
<script src="ttoolscripts/jquery-migrate-1.2.1.js"></script>
<!--[if !IE]><!-->
<script type="text/javascript" src="http://www.trendytools.com/scb_scripts/smoothscroll.js"></script>
<!--<![endif]-->
<script type="text/javascript" src="ttoolscripts/jquery.mmenu.js"></script>
<script type="text/javascript">
		
		function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
<script type="text/javascript">


$(function(){

	$("#contactBtn").live('click', function() {
		
				var name = $("#name").val();
				var email = $("#email").val();
				var phone = $("#phone").val();
				var comments = $("#comments").val();
				var error,errorname,errormsg_email;
		
			
				if (name.length<1) {
					//valid += '<br />Name'+isr;
					error=true;
					errorname="name";
					errormsg_name="Please Provide Name!";
					
				}else if(!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i)) {
						//valid += '<br />A valid Email'+isr;
					error=true;
					errorname="email";
			    	errormsg_email="please provide valid email address!";
	
					
				}else if (comments.length<1) {
					//valid += '<br />Phone'+isr;
					error=true;
					errorname="comments";
					errormsg_comments="Comments Field is Empty!";

				}
		
			if(error){
					
					if(errorname=="name"){
							 $("#name_stat").css("display", "block");
							 $("#email_stat").css("display", "none");
							 $("#comment_stat").css("display", "none");
							 
							 $("#name_stat").html(errormsg_name);
							 $("#email_stat").html("");
							 $("#comment_stat").html("");
							 
					}else if(errorname=="email"){
							
							$("#name_stat").css("display", "none");
							$("#email_stat").css("display", "block");
							$("#comment_stat").css("display", "none");
							
						 	$("#name_stat").html("");
						 	$("#email_stat").html(errormsg_email);
						  	$("#comment_stat").html("");
		  			}else if(errorname=="comments"){
							
							$("#name_stat").css("display", "none");
							$("#email_stat").css("display", "none");
							$("#comment_stat").css("display", "block");
							
						 	$("#name_stat").html("");
						 	$("#email_stat").html("");
						  	$("#comment_stat").html(errormsg_comments);
		  			}
					
						
				}else{		
				
					var datastr ='name=' + name + '&email=' + email + '&phone=' + phone + '&comments=' + comments  + "&submit=true";
					
					$("#name_stat").css("display", "none");
					$("#email_stat").css("display", "none");
					$("#comment_stat").css("display", "none");
					$("#response").css("display", "block");
					$("#response").html("Sending message .... ");
					$("#response").fadeIn("slow");
					//setTimeout("send('"+datastr+"')",2000);
			
					$.ajax({	
						type: "POST",
						url: "submit.php",
						data: datastr,
						cache: false,
						success: function(html){
							
							var html = $.trim(html);
							
							//alert("html=" + html);
							if(html=="success")	{
								$("#response").fadeIn("slow");
		$("#response").html("Your Contact Enquiry has been recieved successfully.<br>We will get back to you shortly <br><br><input type='button' class='subenq' onclick=window.location='http://www.trendytools.com' value=' OK '>");
							
							}else{
								$("#response").fadeIn("slow");
								$("#response").html("Error Sending Mail");
							
							}
						}
					});
			
				}
		
				
			
		
		return false;
		
	});
	
	
	/*thumbs*/		
		  $('.thumbBlock').find('a').hover(function(){
				
				
				$(this).find('img.cthumb').after('<div class="catg_ov"></div>');
				$('div.catg_ov').stop().animate({opacity:1},600,'easeOutQuad',null)
				.after('<img src="http://www.trendytools.com/sbweb-themes/sbimages/circlebgimg.png" width="20" height="20" class="catg_circle"/>');
				
				$('img.catg_circle').stop().animate({width:'192px',height:'192px',left:'122px',top:'102px', opacity:1},1000,'easeOutElastic',null)
				.after('<p class="catg_link">Click Here!</p>');
					$('.catg_link').stop().animate({opacity:1},1000,'easeOutQuad',null);
				
				;;
			},function(){
				
					$('div.catg_ov').stop().animate({opacity:0},500,'easeOutQuad',null);
				    $('div.catg_ov').remove();	
					$('img.catg_circle').stop().animate({width:'20px',height:'20px',left:'192px',top:'189px', opacity:0},300,'easeOutQuad',null);
					$('img.catg_circle').remove();
					$('p.catg_link').stop().animate({opacity:0},300,'easeOutQuad',null);
					$('p.catg_link').remove();
			});

});
</script>
<script type="text/javascript" src="ttcontactmob.js"></script>
<script type="text/javascript">
		$(function(){
			
			$('nav#menu').mmenu();
			/*************************************/
			
			});
</script>
<style type="text/css">
@media only screen and (max-width: 1024px) {
#page nav#menu, #mheader {
	display:block !important;
}
/* hide open-button */
	#mheader,  .mheader {
	background:#fff;
	z-index:300;
}

}
</style>
</head>
<body>
  <div class="hzlineCnt"></div>
  <a href="web-host-contact.php#" id="topScroll" rel="nofollow"></a>
<div id="mobilePage">
	<div id="mheader"> <a href="web-host-contact.php#menu"></a> </div>
    <nav id="menu">
    		<ul>
              <li><a href="index.html" title="Home">Home</a></li>
              <li><a href="cpanel-html5-website-builders.php">Website Builders</a></li>
              <li><a href="site-builder-samples.php">Samples</a></li>
              <li><a href="web-hosts-site-builder-pricing.php">Pricing</a></li>
              <li><a href="http://partners.trendytools.com/webhost-signup.asp?affid=google" title="SignUp" >Sign Up</a></li>    
              <li><a href="http://partners.trendytools.com/html5-site-builder-login.asp" title="Login">Login</a></li>
              <li><a href="cpanel-sitebuilder-faq.php" title="FAQs">FAQs</a></li>
              <li><a href="control-panels.php" title="Control Panels">Control Panels</a></li>
              <li><a href="cpanel-partners.php" title="Our Partners">Partners</a></li>
              <li class="Selected"><a href="web-host-contact.php#" title="Contact">Contact</a></li>	 
              <li><a href="http://partners.trendytools.com/html5-site-builder-login.asp" title="Login">Login</a></li>
                    
            </ul>
  	</nav>
    <div class="headerWrap">
        	<div class="widwrap">
            <div class="logoCol"> <a href="index.html"><img src="trtools-themes/trtimages/trendytools_logo.png" alt="TRENDY tools"/></a>
                <h2>Website Builders for cPanel Hosts</h2>
            </div>
           
            <h3 class="popularTxt">The most popular  <span>cPanel</span> plugin!</h3>
            
         
           </div>
        </div>
    	 <div class="insidepagettlWrap">
        	
            <h3>HTML5 Website Builder(s) Contact:</h3>
            <p>Struck? We're here for you! We're excited to help you! The squeaky wheel gets the grease.</p>
        </div>  
       <div class="trtcontentWrap">
       <!-- <div class="insideBgimg5"></div>-->
       	   <div class="boxWrap">
           <div class="colThreebxBlk">
             <span class="rib_org"></span>
            	<h4> Contact :</h4>
                <div class="lineBg3"></div>
                <p>Stuck? We're here for you! We're excited to help you!<br>
                The squeaky wheel gets the grease.</p><br>

                <h4>Need help in installing TrendyTools?<br>
                  <br>
				Is your client struck in using cPanel website builders?
				<br>
				<br>
				Need clarification in billing?<br>
				<br>
				Want marketing ideas to increase sales using us?<br>
				<br>
				Want our logos and banners for your website? <br>
				<br>
				Do you want your website to be listed as a partner?<br>
				<br>
				Not Happy! Want to scold us?<br>
		 	    <br>
	 	     Happy! Want to cheer us for our work? </h4><br>
                <p class="blutxt">Contact Us!</p>
            	
            </div>
           
            <div class="colTwobx">
            	<span class="rib_blu"></span>
            	<h3 class="fqttl">CONTACT US!</h3>
                <div class="lineBg2"></div>
                <h4>We would love to hear from you! Write to us in case you need any clarifications.</h4>
                
                <form action="web-host-contact.php#" method="post" style="position:relative;">
						<div class="ctfrm" style="height:auto; padding-bottom:10px;">
							
							<div class="frmbx">
								<div class="leftcol">Name:</div>
								<div class="rightcol"><input type="text" name="name_mb" id="name_mb" size="20" class=intext maxlength="120">
                                <span id="name_stat_mb" class="name_stat_mb"></span>
								</div>
							</div>
							<div class="frmbx">
								<div class="leftcol">Email:</div>
								<div class="rightcol"><input type="text" name="email_mb" id="email_mb" size="20" class=intext maxlength="150">
                                <span id="email_stat_mb" class="email_stat_mb"></span>
								</div>
							</div>
							<div class="frmbx">
								<div class="leftcol">Phone:</div>
								<div class="rightcol">
								  <input type="text" name="phone_mb" id="phone_mb" size="20" class=intext maxlength="16" />
								</div>
							</div>
                           
							<div class="frmbx">
								<div class="leftcolb">Comments:</div>
								<div class="rightcolb">
                                <textarea name="comments_mb" id="comments_mb" cols="20" class="intext3" wrap="VIRTUAL" rows="4" style=" font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:1.12; color:#333; font-weight:normal"></textarea>
                                <span id="comment_stat_mb" class="comment_stat_mb"></span>
								</div>
							</div>
							<div class="frmbx">
								<div class="rightcolb2">
                                <input type="submit" value="submit"  name="contactBtn_mb" id="contactBtn_mb" class="subenq">
								<div id="response_mb" class="cnt_response">
                                
                                </div>
								</div>
							</div>
						</div>
						</form>
            </div>
            
            </div>
        </div>
		
          <div style="clear:both; padding:20px 0; width:92%; margin:0 auto; text-align:center;">	
                 <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Sitecube -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2056568454602707"
     data-ad-slot="6441325875"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>  
            
            
    <div class="hrline"></div> 
    <div class="footerWrap"> 
     <div class="logoFt">
            <img src="trtools-themes/trtimages/trendytools_gs.png" alt="Trendy Tools"/>
            <p>Website Builders for cPanel Hosts</p>
            </div>
    <p class="copyrgts">TrendyTools &copy; 2013-15</p></div>
    
</div>
<!--//desktop-->
	<div class="trtmainWrapin">
    	
        <div class="headerWrap">
        	<div class="widwrap">
            <div class="logoCol"> <a href="index.html"><img src="trtools-themes/trtimages/trendytools_logo.png" alt="TRENDY tools"/></a>
                <h2>Website Builders for cPanel Hosts</h2>
            </div>
            <div class="navCol">
            	<ul>
                	<li><a href="cpanel-partners.php" title="Our Partners">Partners</a></li>
                	<li class="active" title="Contact">Contact</li>
                    <li><a href="cpanel-sitebuilder-faq.php" title="FAQs">FAQs</a></li>
                    <li><a href="web-hosts-site-builder-pricing.php">Pricing</a></li>
                    <li><a href="site-builder-samples.php">Samples</a></li>
                    <li><a href="cpanel-html5-website-builders.php">Website Builders</a></li>
                    <li><a href="index.php">Home</a></li>
                    
                </ul>
            </div>
            <h3 class="popularTxt">The most popular  <span>cPanel</span> plugin!</h3>
            <div class="navColtop">
            	<ul>
                	<li class="logdn"><a href="http://partners.trendytools.com/html5-site-builder-login.asp" title="Login">Login</a></li>
                    <li class="sgnup"><a href="http://partners.trendytools.com/webhost-signup.asp?affid=google" title="SignUp" >Sign Up</a></li>
                </ul>
            </div>
            </div>
        </div>
        
        <div class="insidepagettlWrap">
        	
            <h3>HTML5 Website Builder(s) Contact:</h3>
            <p>Struck? We're here for you! We're excited to help you! The squeaky wheel gets the grease.</p>
        </div>    
        
        
        <div class="trtcontentWrap">
        <div class="insideBgimg5"></div>
       	   <div class="boxWrap">
           <div class="colThreebxBlk">
             <span class="rib_org"></span>
            	<h4> Contact :</h4>
                <div class="lineBg3"></div>
                <p>Stuck? We're here for you! We're excited to help you!<br>
                The squeaky wheel gets the grease.</p><br>

                <h4>Need help in installing TrendyTools?<br>
                  <br>
				Is your client struck in using cPanel website builders?
				<br>
				<br>
				Need clarification in billing?<br>
				<br>
				Want marketing ideas to increase sales using us?<br>
				<br>
				Want our logos and banners for your website? <br>
				<br>
				Do you want your website to be listed as a partner?<br>
				<br>
				Not Happy! Want to scold us?<br>
		 	    <br>
	 	     Happy! Want to cheer us for our work? </h4><br>
                <p class="blutxt">Contact Us!</p>
            	
            </div>
           
            <div class="colTwobx">
            	<span class="rib_blu"></span>
            	<h3 class="fqttl">CONTACT US!</h3>
                <div class="lineBg2"></div>
                <h4>We would love to hear from you! Write to us in case you need any clarifications.</h4>
                
                <form action="web-host-contact.php#" method="post" style="position:relative;">
						<div class="ctfrm" style="height:auto; padding-bottom:10px;">
							
							<div class="frmbx">
								<div class="leftcol">Name:</div>
								<div class="rightcol"><input type="text" name="name" id="name" size="38" class=intext maxlength="255">
                                <span id="name_stat" class="name_stat"></span>
								</div>
							</div>
							<div class="frmbx">
								<div class="leftcol">Email:</div>
								<div class="rightcol"><input type="text" name="email" id="email" size="38" class=intext maxlength="255">
                                <span id="email_stat" class="email_stat"></span>
								</div>
							</div>
							<div class="frmbx">
								<div class="leftcol">Phone:</div>
								<div class="rightcol">
								  <input type="text" name="phone" id="phone" size="38" class=intext maxlength="255" />
								</div>
							</div>
                           <!-- <div class="frmbx">
								<div class="leftcol">Enquiry Type:</div>
								<div class="rightcol"><select name="subject" class="intext" size="1">
                                    <option>Upload support</option>
                                    <option>Product Clarification</option>
                                    <option>Billing</option>
                                    <option>Others</option>
                                    </select></div>
							</div>-->
							<div class="frmbx">
								<div class="leftcolb">Comments:</div>
								<div class="rightcolb">
                                <textarea name="comments" id="comments" cols="35" class="intext3" wrap="VIRTUAL" rows="7" style=" font-family:Arial, Helvetica, sans-serif; font-size:20px; line-height:22px; font-weight:normal"></textarea>
                                <span id="comment_stat" class="comment_stat"></span>
								</div>
							</div>
							<div class="frmbx">
								<div class="leftcolb2"></div>
								<div class="rightcolb2">
                                <input type="submit" value="submit"  name="contactBtn" id="contactBtn" class="subenq">
								<div id="response" class="cnt_response">
                                
                                </div>
								</div>
							</div>
						</div>
					</form>
             </div>
            </div>
            
        </div>
         <div style="clear:both; padding:20px 0; width:92%; margin:0 auto; text-align:center;">	<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ad2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-2056568454602707"
     data-ad-slot="8959535478"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>  
</div>
    	<div class="footerWrap">
        	<ul>
            	<li><a href="http://partners.trendytools.com/html5-site-builder-login.asp" title="Login">Login</a></li>
                <li class="active" title="Contact">Contact</li>
                <li><a href="cpanel-sitebuilder-faq.php" title="FAQs">FAQs</a></li>
                <li><a href="http://partners.trendytools.com/webhost-signup.asp?affid=google" title="SignUp">Sign Up</a></li>
                <li><a href="web-hosts-site-builder-pricing.php">Pricing</a></li>
                <li><a href="site-builder-samples.php">Samples</a></li>
                <li><a href="cpanel-html5-website-builders.php">Website Builders</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="logoFt">

            <img src="trtools-themes/trtimages/trendytools_gs.png" alt="Trendy Tools"/>
            <p>Website Builders for cPanel Hosts</p>
            </div>
            <p class="copyrgts">TrendyTools &copy; 2013-15</p>
            
        </div>
	 </div>
     
 
     
    
<!-- BEGIN HumanTag Monitor. DO NOT MOVE! MUST BE PLACED JUST BEFORE THE /BODY TAG --> 
<script language='javascript' src='http://server.iad.liveperson.net/hc/2418715/x.js?cmd=file&file=chatScript3&site=2418715&&category=en;woman;5'> </script> 
<!-- END HumanTag Monitor. DO NOT MOVE! MUST BE PLACED JUST BEFORE THE /BODY TAG -->     
<!-- Start eXTReMe Pro Tracker Code V3/7-->

<script type="text/javascript"><!--

EXd=document;location.protocol=="https:"?EXp="https":EXp="http";EXs="src";

EXd.write("<img "+EXs+"="+EXp+"://nht-2.extreme-dm.com/n2.g?login=trendyto",

"&url="+escape(EXd.URL)+"&jv="+navigator.javaEnabled()+"&",

"d="+screen.width+"x"+screen.height+"&c="+screen.colorDepth+"",

"&l="+escape(EXd.referrer)+" width=0 height=0>");//-->

</script><noscript><img height="1" width="1" alt=""

src="http://nht-2.extreme-dm.com/n2.g?login=trendyto&amp;url=nojs">

</noscript>

<!-- End eXTReMe Pro Tracker Code -->
</body>
</html>


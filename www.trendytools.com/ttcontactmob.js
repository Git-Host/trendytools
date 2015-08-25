$(function(){

$("#contactBtn_mb").live('click', function() {
		
				var name = $("#name_mb").val();
				var email = $("#email_mb").val();
				var phone = $("#phone_mb").val();
				var comments = $("#comments_mb").val();
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
							 $("#name_stat_mb").css("display", "block");
							 $("#email_stat_mb").css("display", "none");
							 $("#comment_stat_mb").css("display", "none");
							 
							 $("#name_stat_mb").html(errormsg_name);
							 $("#email_stat_mb").html("");
							 $("#comment_stat_mb").html("");
							 
					}else if(errorname=="email"){
							
							$("#name_stat_mb").css("display", "none");
							$("#email_stat_mb").css("display", "block");
							$("#comment_stat_mb").css("display", "none");
							
						 	$("#name_stat_mb").html("");
						 	$("#email_stat_mb").html(errormsg_email);
						  	$("#comment_stat_mb").html("");
		  			}else if(errorname=="comments"){
							
							$("#name_stat_mb").css("display", "none");
							$("#email_stat_mb").css("display", "none");
							$("#comment_stat_mb").css("display", "block");
							
						 	$("#name_stat_mb").html("");
						 	$("#email_stat_mb").html("");
						  	$("#comment_stat_mb").html(errormsg_comments);
		  			}
					
						
				}else{		
				
					var datastr ='name=' + name + '&email=' + email + '&phone=' + phone + '&comments=' + comments  + "&submit=true";
					
					$("#name_stat_mb").css("display", "none");
					$("#email_stat_mb").css("display", "none");
					$("#comment_stat_mb").css("display", "none");
					$("#response_mb").css("display", "block");
					$("#response_mb").html("Sending message .... ");
					$("#response_mb").fadeIn("slow");
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
								$("#response_mb").fadeIn("slow");
		$("#response_mb").html("Your Contact Enquiry has been recieved successfully.<br>We will get back to you shortly <br><br><input type='button' class='subenq' onclick=window.location='http://www.trendytools.com' value=' OK '>");
							
							}else{
								$("#response_mb").fadeIn("slow");
								$("#response_mb").html("Error Sending Mail");
							
							}
						}
					});
			
				}
		
				
			
		
		return false;
		
	});
	
	
	});
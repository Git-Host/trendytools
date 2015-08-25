$(function(){
	
	
	//var winWidth = $(window).width();
	//  	  tWidth = winWidth+460;
		  //var dcmWidth = $(document).width();
		  // alert('winWidth'+':'+winWidth);
		  // alert('dcmWidth'+':'+dcmWidth);
		
	Main();
	function Main() {
			  
			  var interval = 8000;
			 
			  function slidescreen1($el, image_pos){
				  
			 //alert(image_pos)	  ;
				  
				$('.slidescreen.'+$el+' h2').css('opacity', 0);
				//$('.slidescreen.'+$el+' h2').css('left','-300px');
				$('.slidescreen.'+$el+' p.ptxt1').animate({ opacity: 0 }, 0);
				//$('.slidescreen.'+$el+' p.ptxt1').css('left','-300px');
				$('.slidescreen.'+$el+' p.ptxt2').animate({ opacity: 0 }, 0);
				//$('.slidescreen.'+$el+' p.ptxt2').css('left','-300px');
				//setTimeout(function(){
				$('.slidescreen.'+$el+' span.strip_bg1').css({opacity:0}).stop().animate({ opacity: 0 }, 500);
				$('.slidescreen.'+$el+' span.strip_bg2').css({opacity:0}).stop().animate({ opacity: 0 }, 500);
				
				//$('.slidescreen.'+$el+' a').stop().animate({ opacity: 0 }, 0);
				$('.slidescreen.'+$el+' .image').animate({ opacity: 0 }, 0);
				$('.slidescreen.'+$el+' .image').css('right','-1200px');
				//$('.slidescreen.'+$el+' span').css('width',tWidth+'px');
				 
				//specific to slide 4
				//if($el == 'four'){
				//	$('.slidescreen.'+$el+' a').css('opacity', 0);
				//	$('.slidescreen.'+$el+' a').css({top:'-200px',left:'0px'});
				//	$('.slidescreen.'+$el+' a').animate({ opacity: 1, top: "500px",left: "600px" }, 1000, 'easeOutCubic');
				
				//	$('.slidescreen.'+$el+' .image').stop().animate({opacity: 1, right: "200px" }, 1200, 'easeOutCubic');
				//}
				
				setTimeout(function(){
				$('.slidescreen.'+$el+' h2').animate({ opacity: 1 }, 600, 'easeOutCubic');
				$('.slidescreen.'+$el+' p.ptxt1').animate({ opacity: 1 }, 500, 'easeOutCubic');
				$('.slidescreen.'+$el+' p.ptxt2').animate({ opacity: 1 }, 500, 'easeOutCubic');
				//setTimeout(function(){
				$('.slidescreen.'+$el+' span.strip_bg1').css({opacity:0}).stop().animate({ opacity: 1 }, 600, 'easeOutCubic');
				$('.slidescreen.'+$el+' span.strip_bg2').css({opacity:0}).stop().animate({ opacity: 1 }, 600, 'easeOutCubic');
				$('.slidescreen.'+$el+' .image').stop().animate({opacity: 1, right: image_pos+"px" }, 600, 'easeOutCubic');
				
				//$('.slidescreen.'+$el+' span').css({opacity:0});
				//},300);
				
				},1200);
				
				
				var slideout = parseInt(interval) - 3500;
				
				$('.slidescreen.'+$el+' .image').css({opacity:0}).animate({opacity: 1, right: image_pos+"px" }, 800, 'easeOutCubic', function(){ 
					
					
					setTimeout(function(){
						//specific to slide 4
						if($el == 'four'){
							//$('.slidescreen.'+$el+' a').fadeOut(1000);
						}
							
						$('.slidescreen.'+$el+' h2').animate({ opacity: 0,left: "-=300px" }, 600, 'easeInCubic');
						$('.slidescreen.'+$el+' p.ptxt1').animate({ opacity: 0,left: "-=300px" }, 400, 'easeInCubic');
						$('.slidescreen.'+$el+' p.ptxt2').animate({ opacity: 0,left: "-=300px" }, 400, 'easeInCubic');
						$('.slidescreen.'+$el+' span.strip_bg1').animate({ opacity:0,left: "-=300px" }, 200, 'easeInCubic');
						$('.slidescreen.'+$el+' span.strip_bg2').animate({ opacity:0,left: "-=300px" }, 200, 'easeInCubic');
						$('.slidescreen.'+$el+' .image').animate({ opacity: 0, right: "-1200px" }, 400, 'easeInCubic');
						
					}, slideout);
				});	
				}
				function returnDefault($el, position){
					
					
					
					//tWidthreturn = tWidth + 460;
					
					setTimeout(function(){
					$('.slidescreen.'+$el+' h2').css({left:"+=300px",opacity:1});
					//$('.slidescreen.'+$el+' h2').css('left','0px');
					$('.slidescreen.'+$el+' p.ptxt1').css({left:"+=300px",opacity:1});
					//$('.slidescreen.'+$el+' p.ptxt1').css('left','0px');
					$('.slidescreen.'+$el+' p.ptxt2').css({left:"+=300px",opacity:1});
					//$('.slidescreen.'+$el+' p.ptxt2').css('left','0px');
					$('.slidescreen.'+$el+' span.strip_bg1').css({left:"+=300px",opacity:1});
					$('.slidescreen.'+$el+' span.strip_bg2').css({left:"+=300px",opacity:1});
					
					$('.slidescreen.'+$el+' .image').css('right',position+'px');
					$('.slidescreen.'+$el+' .image').css('opacity', 1);
					},1200);
					
				}
				
				//initial slide on load
				slidescreen1('one','730');
				
				$(".home_slides").slides({
					play: interval,
					preload: true,
					preloadImage: 'loader.gif',
					effect: 'fade',
					crossfade: true,
					//next: 'slide_arrow_right',
					//prev: 'slide_arrow_left',
					fadeSpeed: 600,
					slideSpeed:600,
					pause: 30,
					animationStart: function(current){
						
						//alert('start');
						
						if(current==4){
							slidescreen1('one','730');
						}
						if(current==2){
							slidescreen1('three','566');
						}
						if(current==1){
							slidescreen1('two','270');
						}
						if(current==3){
							slidescreen1('four','330');
						}
					},
					animationComplete: function(current){
						
						//alert('complete');
						
						//set back to default	
						if(current==1){
							returnDefault('four', '330');
						}else if(current==2){	
							returnDefault('one', '730');
						}else if(current==3){
							returnDefault('two', '270');
						}else if(current==4){
							returnDefault('three', '566');
						}
						
					}
						
				});
     
	 					
			
	 
	  } 
	
	
	
	});
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<title>Wavez 2013</title>


<style type="text/css">
body {
	background-color: #000;
    font-family: American_Purpose;
    font-size: 24px;
    font-style: normal;
    letter-spacing: 1.4px;
	color:#7aa7bb;
}

</style>


</head>

<body>
	<div class="links">
		<div class="item home">
			<center>
				<a href="#" onClick="javascript:switchome('home.php');">home</a>
			</center>
		</div>
		<div class="item contact">
			<center>
				<a href="#" onClick="javascript:ajhome('contact.php');">Contact</a>
			</center>
		</div>
		<div class="item event">
			<center>
				<a href="#" onClick="javascript:ajhome('events.php');">events</a>
			</center>
		</div>
		<div class="item hospitality">
			<center>
				<a href="#" onClick="javascript:ajhome('hospi.php');">hospitality</a>
			</center>
		</div>
		<div class="item sponsors">
			<center>
				<a href="#" onClick="javascript:ajhome('sponsors.htm');">sponsors</a>
			</center>
		</div>
		<div class="item dept">
			<center>
				<a href="#" onClick="javascript:ajhome('department.php');">department</a>
			</center>
		</div>
		<div class="item wavez12">
			<center>
				<a href="http://wavez.iitm.ac.in/2012/index.html" target="_blank">wavez '12</a>
			</center>
		</div>
	</div>
	<div class="wave">
		<div class="waveinner">
			<center>
				<img src="images/wave.jpg" width=100% height="100%">
			</center>
		</div>
	</div>
	
	<div class="trans">
		
	</div>
	
	<div class="homeimage">
		<center>
			<img src="images/wavicon.jpg" height="100%" >
		</center>
	</div>
	
	<div id="main">
		
		content goes here!<br>
		
	</div>
	<div id="imgalign">
		<img src="images/loadinfo.net.gif">
	</div>
		
	
	
	<div class="loginstatus" id="loginstatus">
		
		<?php include"home/loginstatus.php"; ?>
	</div>

	
<!-- ******************    JavaScript    ****************** -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		
		<script type="text/javascript">
		
		function ajhome(tlink){
			
			$(".wave").animate({opacity: 0}, 1000);
			$("#main").fadeOut(1000, function(){
				$("#imgalign").animate({opacity: 1},300,function(){
					$("#main").load(tlink,function(){ $("#main").fadeIn(1000); $("#imgalign").animate({opacity: 0},300,function(){
						$('#main').animate({opacity: 1}, 500);
					} ); });
				} );
			});
			
			//$("#main").load(tlink,function(){ $("#main").fadeIn(1000); $("#imgalign").animate({opacity: 0},300 ); });
			//$('#main').animate({opacity: 1}, 500);
			}
		
		
		
		
		$(document).ready(function(){
			$(".item.home").hover( function(){
				$(".waveinner").stop();
				$(".waveinner").animate({left:'-42.84%'},{duration:1500,easing:'easeInOutBack'});
			});

			$(".item.dept").hover( function(){
				$(".waveinner").stop();
				$(".waveinner").animate({left:'-28.56%'},{duration:1000,easing:'easeInOutBack'});
			});
			
			$(".item.event").hover( function(){
				$(".waveinner").stop();
				$(".waveinner").animate({left:'-14.28%'},{duration:1000,easing:'easeInOutBack'});
			});
			
			
			$(".item.sponsors").hover( function(){
				$(".waveinner").stop();
				$(".waveinner").animate({left:'0%'},{duration:1000,easing:'easeInOutBack'});
			});

			$(".item.hospitality").hover( function(){
				$(".waveinner").stop();
				$(".waveinner").animate({left:'14.28%'},{duration:1000,easing:'easeInOutBack'});
			});
			
			$(".item.wavez12").hover( function(){
				$(".waveinner").stop();
				$(".waveinner").animate({left:'28.56%'},{duration:1000,easing:'easeInOutBack'});
			});

			$(".item.contact").hover( function(){
				$(".waveinner").stop();
				$(".waveinner").animate({left:'42.84%'},{duration:1500,easing:'easeInOutBack'});
			});
		});
		
		
		function switchome(){
			var value = $(".wave").css('opacity');
					if (value == 0)
						{
							$("#main").animate({opacity: 0},1000, function(){
								$(".wave").animate({opacity: 1}, 1000);
							});
						
						}
					else
						ajhome("home.php");
		
		}
		

		function chide(contid){
			$('#'+contid).fadeOut(500);
		}
		function cshow(contid){
			$('#'+contid).fadeIn(500);
		}
		</script>

		<script type="text/javascript">
        		function popUpClosed(relink) {
        			$("#loginstatus").load('home/loginstatus.php');
				ajhome(relink);
        		}
    		</script>
	
</body>
</html>
<?php
	include"facebook.htm";

?>

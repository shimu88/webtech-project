<!DOCTYPE html>
<html>
<head>
	<title>News First</title>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<style>
		body{
            
			font-size: 17px;
			font-family: arial;
			background: #f4f4f4;
			line-height: 1.5em;
		}
		header{
			background:#333;
			color:#fff;
			padding:20px;
			border-bottom: 4px #000 solid;
			margin-bottom: 10px;
		}
		

		#box{
			background:#333;
			color:#fff;
			width:1150px;
			height:90px;
			padding:60px;
			
		}

	
	</style>
</head>
<body>
	<header>
		<h2>News First </h2>
		<?php
$date = date_create('2021-08-19');
echo date_format($date, 'Y-m-d');
?>
		<center><h1>Welcome Fuad</h1></center>
	</header>
	<div id="container">
		 

		<hr>

		<center> <button id="btnSlideUp">Slide Up</button> 
		 <button id="btnSlideDown">SlideDown</button></center>
		<hr>

		<div id="box"> 
		<a href="https://www.thedailystar.net/"> <p style="color:red;">Daily Star</p>
		<a href="http://www.bbc.com"><p style="color:red;">BBC</p>
		 <a href="http://www.prothomalo.com"><p style="color:red;">Prothom Alo</p>
	
		 
		</div>
        <hr>
		<div id="box2"></div>
	</div>

	<script>
		$(document).ready(function(){
			$('#btnFadeOut').click(function(){
				$('#box').fadeOut(3000, function(){
					$('#btnFadeOut').text('Its Gone');
				});
			});
			$('#btnFadeIn').click(function(){
				$('#box').fadeIn(3000);
			});
			$('#btnFadeTog').click(function(){
				$('#box').fadeToggle(1000);
			});
			$('#btnSlideDown').click(function(){
				$('#box').slideDown(3000);
			});
			$('#btnSlideUp').click(function(){
				$('#box').slideUp(3000);
			});
			$('#btnSlideTog').click(function(){
				$('#box').slideToggle(3000);
			});
			$('#btnStop').click(function(){
				$('#box').stop();
			});
	$('#moveAround').click(function(){
				var box = $('#box2');
				box.animate({
					left: 300
				});
				box.animate({
					top: 300
				});
				box.animate({
					left:0,
					top: 300
				});
				box.animate({
					left: 0,
					top:0
				});
			});
		});
	</script>
    <img src="/Project/User/file/img.jpg" width="1500" height="332">
</body>
</html>
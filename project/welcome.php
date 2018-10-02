<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body, html {
    			height: 100%;
    			margin: 0;

			}

			.image{
				background-image: url("images/course.jpg");
				height: 75%; 
    			background-position: center;
    			background-repeat: no-repeat;
    			background-size: cover;
			}

			
			.title {
				text-align: center;
				color:white;
				font-size: 600%;

			}

			.motto {
				text-align: center;
				color: white;
				font-size: 250%

			}

			.bprop {
				text-align: center;
			}
			.heading2 {
				text-align: center;
			}
			#left{
				margin-left: 370px;
				margin-top: 40px;
			}
			#right{
				margin-left: 100px;
			}
			#right2{
				margin-left: 100px;
				margin-top: 40px;

			}
			#left2{
				margin-left: 360px;
			}
			#footer{
				margin-left: 300px;
			}
			#info1{
				margin-left: 300px
			}
			
		</style>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
		
		<title>The Luxury Golf Club</title>
	</head>
	<body>
		<div class="image">
			<br><br><br>
			<br><br><br>
			<h1 class="title"> Welcome </h1>
			<p class="motto"> The Playground for Professionals </p>
			<br><br>

			<div class="bprop">
				<div class="ui center aligned container">
  						<button style="margin-right:100px" onclick="window.location.href='register.php'" class="ui center huge inverted button">Sign-Up</button>
  						<button onclick="window.location.href='index.php'" class="ui center huge inverted button">Login</button>	
				</div>

			</div>
		</div>
		<br><br><br>
		
		<h1 class="heading2"> Introducing the Luxury Golf Club </h1>
		<br><br><br>
		<div class="ui grid">

			<p class="three wide column" id="left"> Welcome to the Luxury Golf Club! Join us and our highly trained instructors to get your golf fix. Whether you are new to golf or a trained veteran, we welcome you to come train with us and perfect your golfing skills. .</p>
			<p class="four wide column" id="right" style="margin-left:170px;"> <img src="images/login.jpg" width="80%" height="80%"></p>
		</div>
		<div class="ui grid">
			<p class="four wide column" id="left2"> <img src="images/field.jpg" width="80%" height="80%"></p>
			<p class="three wide column" id="right2"> With our 75 acre golf field with holes for beginners and experts, you will feel right as home as you build your golfing career with us. </p>
			
		</div>
		<div class="ui grid">

			<p class="three wide column" id="left" > <a href="register.php">Click here </a>to register for an account, wher you will be able to see where and when our practises are held and other information about pricing. If you have any other questions, feel free to contact us with our details below. </p>
			<p class="four wide column" id="right" style="margin-left:170px;"> <img src="images/signup.png" width="80%" height="80%"></p>
		</div>
		<br><br><br><br>
		<div class="ui inverted vertical footer segment">
   				<div class="ui grid">
        			<p class="four wide column" id="footer">The Luxury Golf Club</p>
        			<div class="four wide column" id="info1"> <p> Contact Us</p> <p id="info2"> Email: fakemail@tlgc.com </p> <p> Phone: (988) 988-9800</div>

    			</div>
    			<h6 style="color:white; text-align:center;"> ALL RIGHTS RESERVED 2018-2019 </h6>
	 	</div>
		
	</body>
</html>
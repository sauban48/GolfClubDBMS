<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
	
	<title>Login</title>
	
	<style type="text/css">	
		body {
			margin:0;
			padding:0;
			height: 200px;
    		background: red; /* For browsers that do not support gradients */
    		background: linear-gradient(aqua, silver);
			background-size: cover;
			background-position: center;
	
		}
		.loginbox{
			width: 350px;
			height:450px;
			background: #000;
			color:#fff;
			top:50%;
			left:50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding:70px 30px;
		}
		h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}
		
		.loginbox p{
			margin: 0;
			padding: 0;
			font-weight: bold;
		}
		.loginbox input{
			width:100%;
			margin-bottom: 20px;
		}
		.loginbox input[type="text"], input[type="password"]{
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color:#fff;
			font-size: 16px;
		}
		.loginbox input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background:red;
			color:#fff;
			font-size: 18px;
			border-radius: 20px;
		}
		.avatar{
			width:100px;
			height:100px;
			border-radius: 50%;
			position: absolute;
			top:-50px;
			left: calc(50% - 50px);
		}
		</style>
	</head>
	<body>
		
		<div class="loginbox">
			<img src="images/avatar.png" class="avatar">
			<h1> Login </h1>
			
			<form action="func/login.php" method="POST">
					<p>Username:</p>
					<input type="text" name="user" placeholder="Enter Username">
					<p>Password:</p>
					<input type="password" name="pass" placeholder="Enter Password">
					<br><br>
				
			<input name="submit" type ="submit">
			<br><br>
			<p>Don't have an account? <a href="register.php">Register Here.</a></p>
		</form>
		

		</div>
	
</body>
</html>
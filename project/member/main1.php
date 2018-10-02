<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
		<style>
			#welcome{
				text-align: center;
				margin-top: 10px;
				background-color: black;
				color: white;
				font-size: 70px;
			}
			#intro{
				text-align: center;
			}
			#grid1{
				
    			position: fixed;
  				right: 0;
  				bottom: 0;
  				left: 0;
  				padding: 1rem;	
  				font-size: 50%;	
  			}
			#footer{
				margin-left: 300px;
			}
			#info1{
				margin-left: 300px
			}
		</style>
		<title> Luxury Golf Club</title>
	</head>
	<body>
		<h1 id="welcome">
			<?php
			$fname = $_GET['fname'];
			echo "Welcome " . $fname . "!";
			?>
		</h1>
		<h2 id="intro"> Thank you for signing up for the 


		<div class="ui inverted vertical footer segment" id="grid1">
   				<div class="ui grid">
        			<p class="four wide column" id="footer">The Luxury Golf Club</p>
        			<div class="four wide column" id="info1"> <p> Contact Us</p> <p id="info2"> Email: fakemail@tlgc.com </p> <p> Phone: (988) 988-9800</div>

    			</div>
    			<h9 style="color:white; text-align:center;"> ALL RIGHTS RESERVED 2018-2019 </h9>
	 	</div>

	</body>

</html>
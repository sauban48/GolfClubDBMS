<?php

session_start();

if(isset($_POST['submit'])) {
	
	include '../config.php';
	$user = mysqli_real_escape_string($conx, $_POST['user']);
	$pass = mysqli_real_escape_string($conx, $_POST['pass']);
	

	
	if(empty($user) && empty($pass)){
		//both user and password fields are empty
		
		echo '<script type="text/javascript"> 
					window.location = "../index.php";
					alert("Please enter your username and password.");
		      </script>';  
		
	} else {
		$query = "SELECT * FROM users.userinfos WHERE user='$user'";
		$result = mysqli_query($conx, $query);
		if(mysqli_num_rows($result) > 0) {
			//user exists
			if($row = mysqli_fetch_assoc($result)) {
				if(md5($pass) == $row['password']) {
					//login successful
					$_SESSION['fname'] = $row['fname'];
					$_SESSION['uid'] = $row['uid'];
					$_SESSION['user'] = $row['user'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['pass'] = $row['password'];

					$account = $row['account'];
					//redirect after login successful
					if($account == 1){
						
						header("Location: ../member/main1.php?fname=$row[fname]");
						exit();
					}elseif($account == 2){
						header("Location: ../instructor/main1.php");
						exit();
					}else{
						header("Location: ../treasurer/main1.php");
						exit();
					}

				} else {
					echo '<script type="text/javascript"> 
						 	window.location = "../index.php";
						 	alert("Your password is incorrect.");
		      			 </script>'; 
				}
			}
		} else {
			//user doesnt exist
				echo '<script type="text/javascript"> 
						window.location = "../index.php";
						alert("Your username is incorrect or does not exist. Please create an account with the link below.");
		      		 </script>'; 
		}
	}
} else {
	//already logged in
	header("Location: ../login.php");

	exit();
}
?>
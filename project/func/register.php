<?php
include_once '../config.php';





$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$account = 1;



if(preg_match("/[a-zA-Z]+/", $fname)){
	if(preg_match("/[a-zA-Z]+/", $lname)){

		
		if(preg_match("/[a-zA-Z0-9]+/", $user)){

			$query = "SELECT * FROM users.userinfos WHERE user='$user'";
			$result = mysqli_query($conx, $query);
			if(mysqli_num_rows($result) > 0){
				echo '<script type="text/javascript"> 
							alert("The username is already in use, please enter a different username.");
							window.location = "../register.php";
		  				</script>'; 
			}else{

		  				
			
			if(preg_match("/[a-zA-Z0-9]+/", $pass)){

				if(preg_match("/[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/", $phone)){

					$query = "SELECT * FROM users.userinfos WHERE phone='$phone'";
					$result = mysqli_query($conx, $query);
					if(mysqli_num_rows($result) > 0){
						echo '<script type="text/javascript"> 
							alert("The phone number is already in use, please enter a different phone number.");
							window.location = "../register.php";
		  				</script>'; 
		  			}else{

					if(preg_match("/[a-zA-Z0-9]+/", $email)){
					

						$query = "SELECT * FROM users.userinfos WHERE email='$email'";
						$result = mysqli_query($conx, $query);
						if(mysqli_num_rows($result) > 0) {
							echo '<script type="text/javascript"> 
								alert("The email is already in use, please enter a different email.");
								window.location = "../register.php";
		  					</script>'; 
		  				}else{






						$query = "INSERT INTO userinfos (fname, lname, user, password, phone, email, account) VALUES ('$fname', '$lname', '$user', '$pass', '$phone', '$email', '$account')";

						mysqli_query($conx, $query);

						header("Location: ../index.php");
						}
						}else{
							echo '<script type="text/javascript"> 
								alert("Please enter an email address.");
								window.location = "../register.php";
					

		  					</script>';  
						}
					}
					}else{
						echo '<script type="text/javascript"> 
							alert("Please enter your 10 digit phone number without any spaces or symbols.");
							window.location = "../register.php";
					

		  				</script>';  
					}
				
				}else{
					echo '<script type="text/javascript"> 
						alert("Please enter a password.");
						window.location = "../register.php";
					

		  			</script>';  
			}
		}
		}else{
			echo '<script type="text/javascript"> 
					alert("Please enter a username.");
					window.location = "../register.php";
					

		 	 </script>';  
		
		}
	
	}else{
		echo '<script type="text/javascript"> 
					alert("Please enter your last name.");
					window.location = "../register.php";
					

		 	 </script>';  
	}
}else{
	echo '<script type="text/javascript"> 
					alert("Please enter your first name.");
					window.location = "../register.php";
					

		 </script>';  
}

?>
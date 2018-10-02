<?php include '../config.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Club Management </title>
			<style>
			body {
			  	margin: 0;
			  	font-family: Arial, Helvetica, sans-serif;
			}

			.topnav {
			  	overflow: hidden;
			  	background-color: #333;
			}

			.topnav a {
			  	float: left;
			  	color: #f2f2f2;
			  	text-align: center;
			  	padding: 14px 16px;
			  	text-decoration: none;
			  	font-size: 17px;
			}

			.topnav a:hover {
			  	background-color: #ddd;
			  	color: black;
			}

			.topnav a.active {
			 	background-color: #4CAF50;
			  	color: white;
			}

		* {box-sizing: border-box}
		
		body {font-family: "Lato", sans-serif;}

		/* Style the tab */
		.tab {
		    float: left;
		
		    background-color: #f1f1f1;
		    width: 10%;
		    height: 130px;
		}

		/* Style the buttons inside the tab */
		.tab button {
		    display: block;
		    background-color: inherit;
		    color: black;
		    padding: 22px 16px;
		    width: 100%;
		    border: none;
		    outline: none;
		    text-align: left;
		    cursor: pointer;
		    transition: 0.3s;
		    font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
		    background-color: #ddd;
		}

		/* Create an active/current "tab button" class */
		.tab button.active {
		    background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
		    float: left;
		    padding: 0px 12px;
		 
		    width: 90%;
		    border-left: none;
		    height: 1000px;
		}

		table, th, td {
    		border: 1px solid black;
		}
		th, td {
    		padding-left: 2px;
		}
		</style>
	</head>
	<body>

		<div class="topnav">
		  	<a href="main1.php">Home</a>
			<a class="active" href="members.php">Manage Members</a>
	
		</div>		

		<div class="tab">
		  <button class="tablinks" onclick="openTab(event, 'Add Members')" id="defaultOpen">Add Members</button>
		  <button class="tablinks" onclick="openTab(event, 'Delete Members')">Delete Members</button>
		</div>

		<div id="Add Members" class="tabcontent">
			<h2>Member List</h2>
		 	<table style="width:50%">
				<tr>
					<th> UID </th>
					<th> First Name </th>
					<th> Last Name </th>
				</tr>
				<?php
				$sql = "SELECT * FROM   userinfos WHERE  account= 1";

				$result = mysqli_query($conx, $sql);

				if (!$result) {
    					echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
    					exit;
				}

				if (mysqli_num_rows($result) == 0) {
    					echo "No rows found, nothing to print so am exiting";
    					exit;
				}

				while ($row = mysqli_fetch_assoc($result)) {
   					echo "<tr><td>";
   					echo $row["uid"];
   					echo " </td><td>";
    				echo $row["fname"];
	    			echo " </td><td>";
    				echo $row["lname"];
    				echo "</td></tr><br>";
    			}
    			?>
    		</table>
  			<br><br>
		  	<form action="addMember.php" method="POST">
         		<fieldset>
         	    	<legend>Add a Member</legend>
            		First name:<br>
            		<input id="fnAdd" type="text" name="fname"><br><br>
          		  	Last name:<br>
            		<input id="lnAdd" type="text" name="lname"><br><br>
            		Username:<br>
            		<input id="lnAdd" type="text" name="user"><br><br>
            		Password:<br>
            		<input id="lnAdd" type="password" name="password"><br><br>
            		Phone:<br>
            		<input id="lnAdd" type="text" name="phone"><br><br>
            		Email:<br>
            		<input id="lnAdd" type="text" name="email"><br><br>
     				<br>
            		<input type="submit" value="Add">
         	 	</fieldset>
        	</form>
		
		</div>
		
		<div id="Delete Members" class="tabcontent">
			<h2>Member List</h2>
			<table style="width:50%;">
				<tr>
					<th> UID </th>
					<th> First Name </th>
					<th> Last Name </th>
				</tr>
			<?php
					$sql = "SELECT * FROM   userinfos WHERE  account= 1";

			$result = mysqli_query($conx, $sql);

			if (!$result) {
    			echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
    			exit;
			}

			if (mysqli_num_rows($result) == 0) {
    			echo "No rows found, nothing to print so am exiting";
    			exit;
			}

			while ($row = mysqli_fetch_assoc($result)) {
   				echo "<tr><td>";
   				echo $row["uid"];
   				echo " </td><td>";
    			echo $row["fname"];
    			echo " </td><td>";
    			echo $row["lname"];
    			echo "</td></tr><br>";
    		}
    		?>
    	</table>
    		<br>
   			<br>
    		<form action="deleteFunction1.php?uid=<?php echo $_POST['number'];?>">
          		<fieldset>
            		<legend>Enter a members UID to delete them.</legend>
            		Member UID:<br>
            		<input id="numDelete" type="number" name="number"><br>
              		<button type="submit" value="Add">Delete</button>
          		</fieldset>
        	</form>
		  	
		</div>

		<script>
			function openTab(evt, tabName) {
		    	var i, tabcontent, tablinks;
		   		tabcontent = document.getElementsByClassName("tabcontent");
		    	for (i = 0; i < tabcontent.length; i++) {
		    	    tabcontent[i].style.display = "none";
		    	}
		    	tablinks = document.getElementsByClassName("tablinks");
		    	for (i = 0; i < tablinks.length; i++) {
		    	    tablinks[i].className = tablinks[i].className.replace(" active", "");
		    	}
		    	document.getElementById(tabName).style.display = "block";
		    	evt.currentTarget.className += "active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
		</script>
	</body>
</html>
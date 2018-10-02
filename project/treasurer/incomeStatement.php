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
		td {
    		text-align:center;
		}
		</style>
	</head>
	<body>

		<div class="topnav">
		  	<a href="main1.php">Home</a>
			<a class="active" href="incomeStatement.php">Income Statement</a>
			<a href="payments.php">Payments</a>
			<a href="coaches.php">Manage Coaches</a>
			<a href="members.php">Manage Members</a> 
			<a href="emails.php">Email</a>
		</div>

		

		<div class="tab">
		  <button class="tablinks" onclick="openTab(event, 'Revenue')" id="defaultOpen">Revenue</button>
		  <button class="tablinks" onclick="openTab(event, 'Expenses')">Expenses</button>
		</div>

		<div id="Revenue" class="tabcontent">
			<h3>Revenue</h3>
			<table style="width:50%">
				<tr>
					<th> Revenue</th>
				</tr>
				<?php
				$sql = "SELECT * FROM moneyBoyz";

				$result = mysqli_query($conx, $sql);

				if (!$result) {
    				echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
    				exit;
				}

				if (mysqli_num_rows($result) == 0) {
    				echo "No rows found";
    				exit;
				}

				
				while ($row = mysqli_fetch_assoc($result)) {
   					echo "<tr><td>";
   					echo $row["revenue"];
    				echo "</td></tr><br>";
    			}
    			?>	
    		</table>
    		<br><br>
    		<div class="printMonth">
    			<form action="printMonth.php?month=<?php echo $_POST['month'];?>">
         			<fieldset>
         	    		<legend>To add the profit of the last month, enter the months name.</legend>
            			Month Name:<br>
            			<input type="text" name="month"><br><br>
            
           		 		<input type="submit" value="Add">
         	 		</fieldset>
        		</form>













        	</div>


		</div>

		<div id="Expenses" class="tabcontent">
	    	<h3>Expenses</h3>
			<table style="width:50%">
				<tr>
					<th> Total Club Cost </th>
					<th> Total Coach Cost </th>
					<th> Total Expense </th>
				</tr>
				<?php
				$sql = "SELECT * FROM moneyBoyz";

				$result = mysqli_query($conx, $sql);

				if (!$result) {
    				echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
    				exit;
				}

				if (mysqli_num_rows($result) == 0) {
    				echo "No rows found";
    				exit;
				}

				
				while ($row = mysqli_fetch_assoc($result)) {
   					echo "<tr><td>";
   					echo $row["clubcost"];
   					echo " </td><td>";
    				echo $row["coachcost"];
    				echo " </td><td>";
    				echo $row["clubcost"] + $row['coachcost'];
    				echo "</td></tr><br>";
    			}
    			?>
    		</table>
    		<br><br>

    		<form action="makeChanges.php?clubCost=<?php echo $_POST['clubCost'];?>">
         		<fieldset>
         	    	<legend>Make Changes to any discrepancies</legend>
            		Total Club Cost:<br>
            		<input type="number" name="clubCost"><br><br>
          		  	Total Coach Cost:<br>
            		<input type="number" name="coachCost"><br><br>
            
            		<input type="submit" value="Add">
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
		    evt.currentTarget.className += " active";
		}
		document.getElementById("defaultOpen").click();
	</script>
	</body>
</html>
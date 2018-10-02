<?php
	include '../config.php';
	$uid = $_GET['number'];
	$query = "DELETE FROM userinfos WHERE  uid='$uid'";
	$result = mysqli_query($conx, $query);
	header("Location: coaches.php");
?>
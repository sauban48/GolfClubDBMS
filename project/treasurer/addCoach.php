<?php
include_once '../config.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$pass = md5($_POST['password']);
$phone = $_POST['phone'];
$email = $_POST['email'];
$account = 2;




$query = "INSERT INTO userinfos (fname, lname, user, password, phone, email, account) VALUES ('$fname', '$lname', '$user', '$pass', '$phone', '$email', '$account')";

mysqli_query($conx, $query);

header("Location: coaches.php");

?>
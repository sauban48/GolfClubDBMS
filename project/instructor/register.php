<?php
include_once '../config.php';


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$pass = md5($_POST['password']);
$phone = $_POST['phone'];
$email = $_POST['email'];
$refer = $_POST['reference'];
$account = $_POST['acctype'];




$query = "INSERT INTO userinfos (fname, lname, user, password, phone, email, reference, account) VALUES ('$fname', '$lname', '$user', '$pass', '$phone', '$email', '$refer', '$account')";

mysqli_query($conx, $query);

header("Location: members.php");

?>
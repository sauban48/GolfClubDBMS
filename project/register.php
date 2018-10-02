<?php include 'config.php'; ?>

<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
  <title>Sign Up</title>

  <style type="text/css">   body {
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
      height:670px;
      background: #000;
      color:#fff;
      top:50%;
      left:50%;
      position: absolute;
      transform: translate(-50%, -50%);
      box-sizing: border-box;
      padding:30px 30px;
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
      margin-bottom:  20px;
      
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
    .error{
      color:red;
    }


  </style>

</head>
<body>

  <div class="loginbox">
    
    <h1>Sign Up</h1>
  
    <form id= "form" action="func/register.php" method="POST">

        <p>First Name:</p>
        <input type="text" name="fname" placeholder="Enter First Name">
        <div id="error1" class="error"> </div>
   
        <p>Last Name:</p>
        <input type="text" name="lname" placeholder="Enter Last Name">
        <p id="error2" class="error"> </p>
      
        <p>Username:</p>
        <input type="text" name="user" placeholder="Enter Username">
        <p id="error3" class="error"> </p>
      
        <p>Password:</p>
        <input type="password" name="password" placeholder="Enter Password">
        <p id="error4" class="error"> </p>
   
        <p>Phone Number:</p>
        <input type="text" name="phone" placeholder="Enter Phone Number">
        <p id="error5" class="error"> </p>
      
        <p>Email Address:</p>
        <input type="text" name="email" placeholder="Enter Email Address">
        <p id="error6" class="error"> </p>

        <br>
        <input type ="submit" value="Sign Up">

        <p>Already have an account? <a href="index.php">Click Here.</a></p>
    </form>
  </div>

</body>
<html>

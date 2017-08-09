<?php
session_start();
if(isset($_SESSION['u_id']) || isset($_SESSION['name']))
 { 
 header('Location:afterlogin.php');
 }
?>
<!doctype html>
<html>
<head>
<title> layout 
</title>
<link type="text/css"rel="stylesheet"href="login.css">
</head>
<body>
<div id="header">
<img id="logo"src="line.jpg" alt="">
<h3> welcome to slamgang </h3>
</div>
<div id="navbar">
<form action="login.php" method="post">
    <div class="pos">
    <div class="row">
       <label for="name"><b>User Id:</b></label>
       <input type="text" name="userid" placeholder="Email" required/>
       <label for="name"><b>Password:</b></label>
       <input type="password" name="password" placeholder="password" required/>
	   <input type="submit" class="button" value="login" name="login" />
      <!-- <button class="button" type="button"onclick="document.location.href= 'afterlogin.html'">login</button> -->
    </div>
    </div>
</form>
</div>
<div class="sideright">
  <h2>
   sign up here: ---
 </h2>
   <p>
   <form action="signup.php" method="post">
<div class="form">
   <div class="row">
		<label for="name">First Name :</label>
		<input type="text" id="fname" name="first" placeholder="First name" required/></br></br>
	</div>
	<div class="row">
		<label for="name">Last Name :</label>
		<input type="text" id="fname" name="last" placeholder="Last name" required/></br></br>
	</div>
	<div class="row">
		<label for="email">Email address:</label>
		<input type="text" id="email" name="email" placeholder="email id" required/></br></br>
	</div>
	<div class="row">
		<label for="psd">new password:</label>
		<input type="password" id="psd" name="password" placeholder="Enter password" required/></br></br>
	</div>
	<div class="row">
		<label for="psd">confirm Password:</label>
		<input type="password" id="psd" name="cnfpass"placeholder="Enter password" required/></br></br>
	</div>
	<div class="row">
		<label for="dob">Date Of Birth :</label>
		<input type="date" id="dob" name="dob" required/></br></br>
	</div>
	</p>
	 <input type="submit" name="submit" class="button1" value="Create Account" />
	  <input type="reset" class="button1" value="Clear" />
	 <!--  <button class="button1" type="button"onclick="document.location.href= 'afterlogin.html'">Create Account</button>
	 <button class="button1" type="button">Reset</button>   -->
</div>
</div>
<div class="left">
<div id="slider">
  <figure>
   <img src="pic1.jpg" height="500px" width="400px"/>
   <img src="pic2.jpg" height="500px" width="400px"/>
   <img src="pic3.jpg" height="500px" width="400px"/>
   <img src="pic4.jpg" height="500px" width="400px"/>
   <img src="pic5.jpg" height="500px" width="400px"/>
  </figure>
 </div>
</div>
<div id="footer">

&copy;2017 slamgang.com All Rights Reserved
</div>
</body>
</html>

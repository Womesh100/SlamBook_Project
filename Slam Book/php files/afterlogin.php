<?php
session_start();
if(isset($_SESSION['u_id']))
         {
			 
			 $uid = $_SESSION['u_id'];
			 	$con=mysqli_connect("localhost","root","") or die("unable to connect");
             mysqli_select_db($con,"myslam");
			 //echo'<script type="text/javascript">alert("Login successfully !!!")</script>';
			  $query="select * from diary where u_id='$uid' ORDER BY id DESC ";
	
        $query_run=mysqli_query($con,$query);
	
		
        if(mysqli_num_rows($query_run)>0)
         {
           
             // $row=mysqli_fetch_array($query_run);
			     
				
		 }
		}
	     else{header('Location:homepage.php');
	   
	   
	   }
 ?>
<!doctype html>
<html>
<head>
<title> layout 
</title>
<link type="text/css"rel="stylesheet"href="afterlogin.css" />
</head>
<body>
<div id="header">
<img id="logo"src="logo1.jpg" alt="">
<h3> welcome <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?> </h3>
<form action="logout.php" method="post" style="text-align:right">
 <input type ="submit" name="logout" value="logout" class="lbutton" />
 </form>
 <?php 
   if(isset($_POST['logout']))
   {
    session_destroy();
	header('location:homepage.html');
	echo '<script type="text/javascript">alert("Logout successfully !!!")</script>';
   } 	?>
</div>
<div id="navbar">
<ul>
<li><a href="">Home</a></li>
<li><a href="afterlogin.php"onclick="document.location.href='afterlogin.php'">Personal Diary </a></li>
<li><a href="slammem.html"onclick="document.location.href='slammem.html'">Slam Members</a></li>
<li><a href="">Help</a></li>
</ul>
</div><!--
<div class="left">
<form action=""method="">
Personal Diary:-
<textarea rows=""cols=""> 
Date:-
Time:- 
        -->

<div class="main">
<div class="left">
<form action="diary.php"method="post">
<u>Write Diary:-</u>
<div class="row">
		<label for="dob">Time:</label>
		<input type="time" id="time"name="time"required/></br>
	</div> 
<div class="row">
		<label for="dob">Date:</label>
		<input type="date" id="dob"name="date"required/></br>
	</div>
	<textarea name="text">
</textarea name="text"></br>
<input type="submit" class="button" name="save" value="Save It" />
<!--<button class="button" type="button">Save It</button>-->
</form>
</div>
<div class="right">
<u>Personal Diary :</u>
<?php while(   $row=mysqli_fetch_array($query_run)){?>
<div style="margin-top:10px;">
<a href="detail.php?u_id=<?php echo $row['t_i_m_e'];?>" style="text-decoration:none; cursor:pointer;">
  <label  style="background:white;cursor:pointer;border-radius:5px; " >  <?php echo $row['t_i_m_e'];?></label>
  <label style="height:60px;background:white; cursor:pointer;border-radius:5px;" > <?php echo $row['d_a_t_e'];?></label>
  </a>
</div>
<?php }?>
</div>
</div>
<div id="footer">
<ul>
<li><a href="">About</a></li>
<li><a href="">Help</a></li>
<li><a href=""onclick="document.location.href= 'contact.html'">Contact Us</a></li>
</ul>
&copy;2017 slamgang.com All Rights Reserved.
</div>
</body>
</html>

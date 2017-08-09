<?php 
    $time = $_GET['u_id'];

	$con = mysqli_connect("localhost","root","")or die("unable to connect to database");
	mysqli_select_db($con,"myslam");
	$query="select * from diary where t_i_m_e='$time'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0){
		$row = mysqli_fetch_array($query_run);
		
	}
?>



<!doctype html>
<html>
<head>
<title> layout 
</title>
<link type="text/css"rel="stylesheet"href="detail.css">
</head>
<body>
<div id="header">
<h3> welcome </h3>
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
<li><a href=""onclick="document.location.href='afterlogin.html'">Personal Diary </a></li>
<li><a href=""onclick="document.location.href='slammem.html'">Slam Members</a></li>
<li><a href="">Help</a></li>
</ul>
</div>
<div class="left">
<form action="afterlogin.php"method="post">
<u>Personal Diary:-</u>

	<textarea name="text">
	<?php echo $row['textfield'];?>
	
</textarea></br>
<!--Personal Diary:-
<textarea rows=""cols=""> 
Date:-
Time:-
</textarea></br>-->
<a href="afterlogin.php" > <button class="button" type="button">ADD NEW</button> </a>
<button class="button" type="button">EDIT</button>
</form>
</div>
<div class=<"right">
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










<!--
<html>
    <head></head>
   <body>
       <div>
	       <?php echo $row['textfield'];?>
	   </div>
   </body>
   
</html>     -->
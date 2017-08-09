<?php
 session_start();
echo $_SESSION['u_id'];
if(isset ( $_SESSION['u_id']))
{
?>
<!doctype html>
<html>
<head>
<title> slam members...
</title>
<link type="text/css"rel="stylesheet"href="addnewslam.css">
</head>
<body>
<div id="header">
<h3> welcome <!--<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?>--></h3>
</div>
<div id="navbar">
<ul>
<li><a href="">Home</a></li>
<li><a href="afterlogin.php"onclick="document.location.href= 'afterlogin.php'">Personal Diary </a></li>
<li><a href=""onclick="document.location.href= 'slammem.html'">Slam Members</a></li>
<li><a href="">Help</a></li>
</ul>
</div>
<div class="left">
<!-- <form action=""method=""> -->
<h2>
  <u><i>Details For A New Slam Member:-</u></i>
 </h2>
 <div class="detail">
</div>
  <form action="addslam.php" method="post">
   <p>
<div class="form">
   <div class="row">
		<label for="name">First Name :</label>
		<input type="text" id="fname"name="fname" placeholder="First name" required/></br></br>
	</div>
	<div class="row">
		<label for="name">Last Name :</label>
		<input type="text" id="lname"name="last" placeholder="Last name" required/></br></br>
	</div>
	<div class="row">
		<label for="name">Nick(pet) Name :</label>
		<input type="text" id="pname"name="nickname" placeholder="pet name" required/></br></br>
	</div>
	<div class="row">
		<label for="dob">Date Of Birth :</label>
		<input type="date" id="dob"name="dob" required/></br></br>
	</div>
	<div class="row">
		<label for="email">Email address:</label>
		<input type="text" id="email" name="email" placeholder="email id" required/></br></br>
	</div>
	<div class="row">
		<label for="address"> Address:</label>
		<input type="text" id="address"name="addr" placeholder="address" required/></br></br>
	</div>
	<div class="row">
		<label for="cell no.">Mobile No:</label>
		<input type="text" id="mno."name="mob" placeholder="Mobile No." required/></br></br>
	</div>
<h2><u><i>Favorites:-</u></i></h2>
	<div class="row">
		<label for="color">color:</label>
		<input type="text" id="color"name="color" placeholder="Enter color" required/></br></br>
	</div>
	<div class="row">
		<label for="food">Foods:</label>
		<input type="text" id="food"name="foods" placeholder="foods" required/></br></br>
	</div>
	<div class="row">
		<label for="books">Books:</label>
		<input type="text" id="books"name="books" placeholder="Enter books name" required/></br></br>
	</div>
	<div class="row">
		<label for="movies">Movies:</label>
		<input type="text" id="movies"name="movies" placeholder="movies name" required/></br></br>
	</div>
	<div class="row">
		<label for="ts">Tv Shows:</label>
		<input type="text" id="ts"name="tvshows" placeholder="Tv Shows" required/></br></br>
	</div>
	<div class="row">
		<label for="sports">Sports:</label>
		<input type="text" id="sports"name="sports" placeholder="Enter Sports" required/></br></br>
	</div>
	<div class="row">
		<label for="t\g">toys/gadgets:</label>
		<input type="text" id="t\g"name="toys" placeholder="Enter toys/gadgets" required/></br></br>
	</div>
	<div class="row">
		<label for="TTD">things to do:</label>
		<input type="text" id="TTD"name="thingstodo" placeholder="things to do" required/></br></br>
	</div>
	<h2><u><i>Memories:-</u></i></h2>
	<label for="BM">Best Memories:</label>
	 <textarea rows=""cols="" name="bestmemories"> 
     </textarea></br></br>
	 <label for="BM">Bad Memories:</label>
	 <textarea rows=""cols="" name="badmemories"> 
     </textarea>
	</p>
	 <input type="submit" class="button" value="save" name="save"/>
	<!-- <button class="button" type="button"onclick="document.location.href= 'afterlogin.html'">Save</button>   -->
	
</div>
</form>
</div>
<div class="right">
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
<?php
}
else
{
echo "login ";
}
?>
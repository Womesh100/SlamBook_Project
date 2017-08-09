<?php 
 session_start();
if(isset($_SESSION['u_id']))
         {
		 $sno = $_SESSION['s_no'];
 //if(isset($_POST['first_name'])){
//	 $name=$_POST["fname"];
//	echo $name;
  $con=mysqli_connect('localhost','root',"") or die("unable to connect");
  mysqli_select_db($con,'myslam');
  $q="select *from addslam where s_no=$sno ";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  mysqli_close($con);
		 }
		// }
  else{header('Location:homepage.html');
	
	   
	   }   
 ?>
  


<!doctype html>
<html>
<head>
<title> view slam members...
</title>
<link type="text/css"rel="stylesheet"href="viewslam.css">
</head>
<body>
<div id="header">
<h3>slamgang.com<h3>
<!-- <a href="afterlogin.php"><input type="submit" value="GO back" name="back" /></a>  -->
</div>
<div id="navbar">
<ul>
<li><a href="afterlogin.php">Home</a></li>
<li><a href="afterlogin.php"onclick="document.location.href= 'afterlogin.html'">Personal Diary </a></li>
<li><a href="slammem.html"onclick="document.location.href= 'slammem.html'">Slam Members</a></li>
<li><a href="">Help</a></li>
</ul> 
</div>

<div class="left">
<!--<form action=""method="">-->
<h2><u>data fetching Area :</u></h2>
<table style="width:100%">
  <tr>
    <th>Detail</th>
    <th>Data</th> 
  </tr>
  
<?php 
     for($i=1;$i<=$num;$i++){
        $row=mysqli_fetch_array($result);
?>
		
  <tr>
    <td>first_name</td>
    <td><?php echo $row['first_name']; ?></td> 
  </tr>
  <tr>
    <td>last_name</td>
    <td><?php echo $row['last_name']; ?></td> 
  </tr>
  <tr>
    <td>nick_name</td>
    <td><?php echo $row['nick_name']; ?></td> 
  </tr>
  <tr>
    <td>DOB</td>
    <td><?php echo $row['dob']; ?></td> 
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $row['email']; ?></td> 
  </tr>
  <tr>
    <td>address</td>
    <td><?php echo $row['address']; ?></td> 
  </tr>
  <tr>
    <td>mobile_no.</td>
    <td><?php echo $row['mobile_no']; ?></td> 
  </tr>
  <tr>
    <td>color</td>
    <td><?php echo $row['color']; ?></td> 
  </tr>
  <tr>
    <td>foods</td>
    <td><?php echo $row['foods']; ?></td> 
  </tr>
  <tr>
    <td>books</td>
    <td><?php echo $row['books']; ?></td> 
  </tr>
  <tr>
    <td>movies</td>
    <td><?php echo $row['movies']; ?></td> 
  </tr>
  <tr>
    <td>tv_show</td>
    <td><?php echo $row['tv_shows']; ?></td> 
  </tr>
  <tr>
    <td>sports</td>
    <td><?php echo $row['sports']; ?></td> 
  </tr>
  <tr>
    <td>toys_gadgets</td>
    <td><?php echo $row['toys_gadgets']; ?></td> 
  </tr>
   <tr>
    <td>Things to do</td>
    <td><?php echo $row['things_to_do']; ?></td> 
  </tr>
  <tr>
    <td>best_memories</td>
    <td><?php echo $row['best_memories']; ?></td> 
  </tr>
  <tr>
    <td>bad_memories</td>
    <td><?php echo $row['bad_memories']; ?></td> 
  </tr>
  <?php
	 }
	 ?>
</table>
<!--<button class="button" type="button" onclick="document.location.href='edit.php'">EDIT</button>
<button class="button" type="button" onclick="document.location.href='delete.php'">DELETE</button> 
</form>-->
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
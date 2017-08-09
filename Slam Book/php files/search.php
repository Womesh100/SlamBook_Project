<?php
session_start();
if(isset($_POST['search'])){
 $name=$_POST["first_name"];
   echo $name;
 $id=$_SESSION['u_id'];

 if($name==" "){
 //if user not enter anything then do not enter any name 
 }
 else{
	$con=mysqli_connect('localhost','root','','myslam');
	// mysqli_select_db($con,'myslam');
	
 $query=mysqli_query($con,"select * from addslam where first_name='$name' AND u_id='$id'");
 
     
/*	 $query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0){   */
		$row = mysqli_fetch_array($query);
//	}
 //$aName1 = mysqli_fetch_assoc($query1);
//  $name = $row['first_name'];
	}
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
<img id="logo"src="logo1.jpg" alt="">
<h3>slamgang.com<h3>
</div>
<div id="navbar">
<ul>
<li><a href="">Home</a></li>
<li><a href=""onclick="document.location.href= 'afterlogin.php'">Personal Diary </a></li>
<li><a href=""onclick="document.location.href= 'slammem.html'">Slam Members</a></li>
<li><a href="">Help</a></li>
</ul> 
</div>
<div class="left">
<form action=""method="">
<h2><u>data fetching Area :</u></h2>
<table style="width:100%">
  <tr>
    <th>Detail</th>
    <th>Data</th> 
  </tr>
  <tr>
    <td>first_name</td>
    <td></td> 
  </tr>
  <tr>
    <td>last_name</td>
    <td></td> 
  </tr>
  <tr>
    <td>nick_name</td>
    <td></td> 
  </tr>
  <tr>
    <td>DOB</td>
    <td></td> 
  </tr>
  <tr>
    <td>Email</td>
    <td></td> 
  </tr>
  <tr>
    <td>address</td>
    <td></td> 
  </tr>
  <tr>
    <td>mobile_no.</td>
    <td></td> 
  </tr>
  <tr>
    <td>color</td>
    <td></td> 
  </tr>
  <tr>
    <td>foods</td>
    <td></td> 
  </tr>
  <tr>
    <td>books</td>
    <td></td> 
  </tr>
  <tr>
    <td>movies</td>
    <td></td> 
  </tr>
  <tr>
    <td>tv_show</td>
    <td></td> 
  </tr>
  <tr>
    <td>sports</td>
    <td></td> 
  </tr>
  <tr>
    <td>toys_gadgets</td>
    <td></td> 
  </tr>
  <tr>
    <td>best_memories</td>
    <td></td> 
  </tr>
  <tr>
    <td>bad_memories</td>
    <td></td> 
  </tr>
</table>
</form>
</div>
<div class="right" style="margin-right:110px;">
<form action="search.php" method="post">
<h2><u> my slam members :</u><h2>
<div class="sbox">
<!--<input type="image" name="search" src="search.png" class="sb"/>-->

<input type="text" name="first_name" class="sbar"placeholder="Search.." onkeyup="aa()" id="name"/>
<input type="submit" name="search" value="search" id="sb"/>
<?php
if(isset($_POST['search']))
 {   
 
 $_SESSION['s_no']=$row['s_no'];
?>
</div>
<div style="margin-top:10px;">
<a href="viewslam.php?u_id=<?php echo $row['u_id'];?>" style="text-decoration:none; cursor:pointer;">
  <label  style="background:white;cursor:pointer; " ><br/><br/><br/>  <?php echo $row['first_name']; 
 
 
  ?></label>
 <!--<label style="height:60px;background:white; cursor:pointer;" > <?php //  echo $row['d_a_t_e'];?></label>   -->
  </a>
</div>
<!--
        echo $row['first_name'];  -->
		<?php
 } 
//  else{ echo "no data found" ; 
//   }
?> 
<!--<script type="text/javaScript" >
 function aa()
 {
   xmlhttp=new XMLHttpRequest();
   xmlhttp.open("GET","search.php?name="+document.getElementById("name").value,false);
   xmlhttp.send(null);   
 }
 </script>-->

 
</form>
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

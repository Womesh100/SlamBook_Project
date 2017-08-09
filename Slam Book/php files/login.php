<?php
 session_start();
 $con=mysqli_connect("localhost","root","") or die("unable to connect");
 mysqli_select_db($con,"myslam");
 if (isset($_POST['login'])) 
 {
  $userid=$_POST['userid'];
  $password=$_POST['password'];
  
  $query="select * from registration where email_addr='$userid' AND password='$password'";
  $query_run=mysqli_query($con,$query);
  if(mysqli_num_rows($query_run)>0)
  {
   $row=mysqli_fetch_array($query_run);   
   echo '<script type="text/javascript">alert("login Sucessfully...")</script>';
   $_SESSION['userid']=$email_addr;
   $_SESSION['name']=$row['first_name'];
   $_SESSION['u_id']=$row['u_id'];
   header('Location:afterlogin.php');
  }
  else
  {
   echo '<script type="text/javascript">alert("Invalid userid or Password")</script>';
  }
 }
?>


<?php
 session_start();  
  
 $con=mysqli_connect("localhost","root","") or die("unable to connect");
 mysqli_select_db($con,"myslam");

   $first_name=$_POST['first'];
   $last_name=$_POST['last'];
   $email_addr=$_POST['email'];
   $password=$_POST['password'];
   $cnfpass=$_POST['cnfpass'];
   $Date_of_birth=$_POST['dob'];
   if($password==$cnfpass)
   {
    $query="select * from registration where email_addr='$email_addr'";
	$query_run=mysqli_query($con,$query);
	if(mysqli_num_rows($query_run) > 0)
	{ 
	 echo '<script type="text/javascript">alert("User already exist!!!!...plzz try with different account")</script>';
	}
	else
    {
      $query="insert into registration(first_name,last_name,email_addr,password,conf_pass,date_of_birth) values('$first_name','$last_name','$email_addr','$password','$cnfpass','$Date_of_birth')";
      $query_run=mysqli_query($con,$query);	  
      if($query_run)
      {   	   
	   $_SESSION['name']=$first_name;	  
       header('Location:homepage.html'); 	   
	  }
	  else
      {
       echo '<script type="text/javascript">alert("Error in login...plz try again")</script>';	  
	  }
    }
    
   }else{echo '<script type="text/javascript">alert("Password do not match")</script>';}	
?>
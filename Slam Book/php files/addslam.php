<?php
 session_start();   
 if(isset($_SESSION['u_id']))
 {
  $con=mysqli_connect("localhost","root","") or die("unable to connect");
  mysqli_select_db($con,"myslam");
 if (isset($_POST['save'])) {
   $first_name=$_POST['fname'];
   $last_name=$_POST['last'];
   $nick_name=$_POST['nickname'];
   $Date_of_birth=$_POST['dob'];
   $email_addr=$_POST['email'];
   $address=$_POST['addr'];
   $mobile_number=$_POST['mob'];
   $color=$_POST['color'];
   $foods=$_POST['foods'];
   $books=$_POST['books'];
   $movies=$_POST['movies'];
   $tvshows=$_POST['tvshows'];
   $sports=$_POST['sports'];
   $toys=$_POST['toys'];
   $things_to_do=$_POST['thingstodo'];
   $best_memories=$_POST['bestmemories'];
   $bad_memories=$_POST['badmemories'];
   $u_id = $_SESSION['u_id'];
      $query="insert into addslam( first_name , last_name , nick_name , dob , email , address , mobile_no , color , foods , books , movies , tv_shows , 
	  sports , toys_gadgets , things_to_do , best_memories , bad_memories , u_id) values('$first_name','$last_name','$nick_name','$Date_of_birth',
	  '$email_addr','$address','$mobile_number','$color','$foods','$books',' $movies','$tvshows','$sports','$toys','$things_to_do','$best_memories',
	  '$bad_memories','$u_id')";
      $query_run=mysqli_query($con,$query);	 
      //echo $query_run;
	    //echo "Error: " . $query_run . "<br>" . $con->error;
       //exit;	

       if($query_run)
      { 

       echo '<script type="text/javascript">alert("successfull entered!!!!...")</script>'; 
      /* $row=mysqli_fetch_array($query_run); 	   
	   $_SESSION['name']=$row['first_name'];  */
       header('Location:addnewslam.html'); 
		
	  }
	else
      {
       echo '<script type="text/javascript">alert("Error in entry...plz try again")</script>';	  
	  }
 }
	  else
      {
       echo '<script type="text/javascript">alert("Error in entry...plz try again")</script>';	  
	  }
 }
	  ?>
<?php
 session_start();  
 
 $con=mysqli_connect("localhost","root","") or die("unable to connect");
 mysqli_select_db($con,"myslam");

   $time=$_POST['time'];
   $date=$_POST['date'];
   $text=$_POST['text'];
   $u_id = $_SESSION['u_id'];
	  $query="INSERT INTO diary (t_i_m_e,d_a_t_e,textfield,u_id) VALUES('$time','$date','$text','$u_id')";
      $query_run=mysqli_query($con,$query);	
       //echo $query_run;
	    //echo "Error: " . $query_run . "<br>" . $con->error;
       //exit;	   
      if($query_run)
      { 
       echo '<script type="text/javascript">alert("successfull entered!!!!...")</script>'; 
     // /* $row=mysqli_fetch_array($query_run); */	   
	  // $_SESSION['q']=$row['u_id'];  
       header('Location:afterlogin.php'); 	   
	  }
	  else
      {
       echo '<script type="text/javascript">alert("Error in entry...plz try again")</script>';	  
	  }

?>
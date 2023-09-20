<!doctype html>
<html>
	<head>
		<title></title>
	</head>
    <body>
		<center>
			
		<?php
		$connection=mysqli_connect("localhost","root","","alumni");

         if($connection)
         { 
	       $std_id=$_POST['std_id'];
	       $std_name=$_POST['std_name'];
	       $sql="select * from student where std_id='$std_id' and std_name='$std_name'";  
	       $result1=$connection->query($sql);
	       if($result1->num_rows==1)
	       {
			   include "student.php";
		   }
		   else
		   {
			   echo"something went wrong in logging in";
		   }
	      }
		  else
		  {
	     	   echo "Unable to connect";
		  }
		  ?>
		  </center>
			   
    </body>

</html>

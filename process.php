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
	       $uname=$_POST['uname'];
	       $upassword=$_POST['upassword'];
	       $sql="select * from users where uname='$uname' and upassword='$upassword'";  
	       $result1=$connection->query($sql);
	       if($result1->num_rows==1)
	       {
			   include"admin.php";
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

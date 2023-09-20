<?php
session_start();
$std_id = $_POST['id'];
$d_no=$_POST['nor'];
$std_name=$_POST['name'];
$sem=$_POST['sem'];
$s_phno=$_POST['phone'];
$s_email=$_POST['email'];

$conn = new mysqli('localhost','root','','alumni');
if($conn->connect_error){
die('connection failed : '.$conn->connect_error);
}

	 else {       
         
		 $sql = "INSERT INTO student(std_id,d_no,std_name,sem,s_phno,s_email)
              	 VALUES ('$std_id','$d_no','$std_name','$sem','$s_phno','$s_email')";

		 if (mysqli_query($conn, $sql))
            	{
                	//Getting id of lastly inserted record'.$error.'
                	$last_id = mysqli_insert_id($conn);
   
   	             echo '<script type="text/javascript">alert("data inserted successful!")</script>';
        	                       
            	}
                

            	else {
                	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            	}
               }
            	mysqli_close($conn); 

?>